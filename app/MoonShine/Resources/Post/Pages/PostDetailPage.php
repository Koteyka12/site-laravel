<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Post\Pages;

use App\MoonShine\Resources\Post\PostResource;
use App\MoonShine\Resources\PostCategory\PostCategoryResource;
use App\MoonShine\Resources\PostTag\PostTagResource;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use Throwable;

/**
 * @extends DetailPage<PostResource>
 */
class PostDetailPage extends DetailPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make('id'),
            Text::make('Title', 'title'),
            Text::make('Slug', 'slug'),
            Text::make('Excerpt', 'excerpt'),
            Text::make('Content', 'content'),
            Text::make('Thumbnail', 'thumbnail'),
            Checkbox::make('IsPublished', 'is_published'),
            Text::make('PublishedAt', 'published_at'),
            BelongsToMany::make('Categories', 'categories', resource: PostCategoryResource::class)
                ->inLine(', '),
            BelongsToMany::make('Tags', 'tags', resource: PostTagResource::class)
                ->inLine(', '),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @param  TableBuilder  $component
     * @return TableBuilder
     */
    protected function modifyDetailComponent(ComponentContract $component): ComponentContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer(),
        ];
    }
}
