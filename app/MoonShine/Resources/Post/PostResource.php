<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Post;

use App\Models\Blog\Post;
use App\Models\Blog\PostTag;
use App\MoonShine\Resources\Post\Pages\PostDetailPage;
use App\MoonShine\Resources\Post\Pages\PostFormPage;
use App\MoonShine\Resources\Post\Pages\PostIndexPage;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use MoonShine\Contracts\Core\DependencyInjection\FieldsContract;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\MenuManager\Attributes\Group;
use MoonShine\MenuManager\Attributes\Order;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends ModelResource<Post, PostIndexPage, PostFormPage, PostDetailPage>
 */
#[Icon('folder')]
#[Group('Blog')]
#[Order(20)]
class PostResource extends ModelResource
{
    protected string $model = Post::class;

    protected string $title = 'Posts';

    protected string $column = 'title';

    protected bool $detailInModal = true;

    protected array $with = ['categories', 'tags', 'seo'];

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PostIndexPage::class,
            PostFormPage::class,
            PostDetailPage::class,
        ];
    }

    protected function modifyQueryBuilder(Builder $builder): Builder
    {
        $start = Carbon::now()->startOfMonth()->toDateString();
        $end = Carbon::now()->endOfMonth()->toDateString();

        return $builder->withSum([
            'viewStats as views_month' => fn (Builder $query) => $query->whereBetween('date', [$start, $end]),
        ], 'views');
    }

    protected function afterSave(DataWrapperContract $item, FieldsContract $fields): DataWrapperContract
    {
        $item = parent::afterSave($item, $fields);

        $tagsField = $fields->findByColumn('tags_list');

        if (! $tagsField || ! $tagsField->hasRequestValue()) {
            return $item;
        }

        $raw = (string) $tagsField->getRequestValue();
        $titles = $this->normalizeTagsList($raw);

        $tagIds = [];

        foreach ($titles as $title) {
            $slug = Str::slug($title);

            if ($slug === '') {
                continue;
            }

            $tag = PostTag::firstOrCreate(
                ['slug' => $slug],
                ['title' => $title],
            );

            $tagIds[] = $tag->id;
        }

        $item->getOriginal()->tags()->sync(array_values(array_unique($tagIds)));

        $this->syncSeoFromRequest($item, $fields);

        return $item;
    }

    /**
     * @return array<int, string>
     */
    private function normalizeTagsList(string $raw): array
    {
        $parts = array_map('trim', explode(',', $raw));
        $parts = array_filter($parts, static fn (string $value): bool => $value !== '');

        return array_values(array_unique($parts));
    }

    private function syncSeoFromRequest(DataWrapperContract $item, FieldsContract $fields): void
    {
        $seoFields = [
            'meta_title' => 'seo_meta_title',
            'meta_description' => 'seo_meta_description',
            'og_title' => 'seo_og_title',
            'og_description' => 'seo_og_description',
            'og_image' => 'seo_og_image',
            'canonical_url' => 'seo_canonical_url',
            'robots' => 'seo_robots',
        ];

        $data = [];
        $hasAny = false;

        foreach ($seoFields as $dbKey => $fieldKey) {
            $field = $fields->findByColumn($fieldKey);

            if (! $field || ! $field->hasRequestValue()) {
                continue;
            }

            $value = $field->getRequestValue();
            $data[$dbKey] = $value;

            if (filled($value)) {
                $hasAny = true;
            }
        }

        if (empty($data)) {
            return;
        }

        $seoRelation = $item->getOriginal()->seo();

        if (! $hasAny) {
            $seoRelation->delete();

            return;
        }

        $seo = $seoRelation->firstOrNew();
        $seo->fill($data);
        $seo->save();
    }
}
