<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\PostSeo;

use App\Models\Blog\PostSeo;
use App\MoonShine\Resources\PostSeo\Pages\PostSeoDetailPage;
use App\MoonShine\Resources\PostSeo\Pages\PostSeoFormPage;
use App\MoonShine\Resources\PostSeo\Pages\PostSeoIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\MenuManager\Attributes\SkipMenu;

/**
 * @extends ModelResource<PostSeo, PostSeoIndexPage, PostSeoFormPage, PostSeoDetailPage>
 */
#[SkipMenu]
class PostSeoResource extends ModelResource
{
    protected string $model = PostSeo::class;

    protected string $title = 'Post SEO';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PostSeoIndexPage::class,
            PostSeoFormPage::class,
            PostSeoDetailPage::class,
        ];
    }
}
