<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\PostCategory;

use App\Models\Blog\PostCategory;
use App\MoonShine\Resources\PostCategory\Pages\PostCategoryDetailPage;
use App\MoonShine\Resources\PostCategory\Pages\PostCategoryFormPage;
use App\MoonShine\Resources\PostCategory\Pages\PostCategoryIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\MenuManager\Attributes\Group;
use MoonShine\MenuManager\Attributes\Order;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends ModelResource<PostCategory, PostCategoryIndexPage, PostCategoryFormPage, PostCategoryDetailPage>
 */
#[Icon('folder')]
#[Group('Blog')]
#[Order(21)]
class PostCategoryResource extends ModelResource
{
    protected string $model = PostCategory::class;

    protected array $with = ['category'];

    protected string $title = 'Categories';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PostCategoryIndexPage::class,
            PostCategoryFormPage::class,
            PostCategoryDetailPage::class,
        ];
    }
}
