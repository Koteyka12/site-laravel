<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\PostTag;

use App\Models\Blog\PostTag;
use App\MoonShine\Resources\PostTag\Pages\PostTagDetailPage;
use App\MoonShine\Resources\PostTag\Pages\PostTagFormPage;
use App\MoonShine\Resources\PostTag\Pages\PostTagIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\MenuManager\Attributes\Group;
use MoonShine\MenuManager\Attributes\Order;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends ModelResource<PostTag, PostTagIndexPage, PostTagFormPage, PostTagDetailPage>
 */
#[Icon('folder')]
#[Group('Blog')]
#[Order(22)]
class PostTagResource extends ModelResource
{
    protected string $model = PostTag::class;

    protected string $title = 'Tags';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PostTagIndexPage::class,
            PostTagFormPage::class,
            PostTagDetailPage::class,
        ];
    }
}
