<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Post\Pages;

use App\MoonShine\Resources\Post\PostResource;
use App\MoonShine\Resources\PostCategory\PostCategoryResource;
use MoonShine\CKEditor\Fields\CKEditor;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;

/**
 * @extends FormPage<PostResource>
 */
class PostFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Grid::make([
                Column::make([
                    Collapse::make('Tets', [
                        Text::make('Title', 'title'),
                        Text::make('Slug', 'slug'),
                        Textarea::make('Excerpt', 'excerpt'),
                        CKEditor::make('Content', 'content'),
                        Switcher::make('IsPublished', 'is_published'),
                        Date::make('PublishedAt', 'published_at')
                            ->withTime()
                            ->format('d.m.Y H:i:s'),
                        BelongsToMany::make('Categories', 'categories', resource: PostCategoryResource::class)
                            ->selectMode()
                            ->searchable(),
                        Text::make('Tags', 'tags_list')
                            ->placeholder('laravel, php, moonshine')
                            ->changeFill(static fn ($item) => $item?->tags?->pluck('title')->implode(', ') ?? '')
                            ->canApply(static fn () => false),
                    ]),
                ])->columnSpan(8),

                Column::make([
                    Collapse::make('Thumbnail', [
                        Image::make('', 'thumbnail')
                            ->disk('public')
                            ->dir('avatars'),
                    ])->open(true),
                    Collapse::make('SEO', [
                        Text::make('Meta Title', 'seo_meta_title')
                            ->changeFill(static fn ($item) => $item?->seo?->meta_title ?? '')
                            ->canApply(static fn () => false),
                        Textarea::make('Meta Description', 'seo_meta_description')
                            ->changeFill(static fn ($item) => $item?->seo?->meta_description ?? '')
                            ->canApply(static fn () => false),
                        Text::make('OG Title', 'seo_og_title')
                            ->changeFill(static fn ($item) => $item?->seo?->og_title ?? '')
                            ->canApply(static fn () => false),
                        Textarea::make('OG Description', 'seo_og_description')
                            ->changeFill(static fn ($item) => $item?->seo?->og_description ?? '')
                            ->canApply(static fn () => false),
                        Text::make('OG Image', 'seo_og_image')
                            ->prefix('https://')
                            ->placeholder('path/to/image.jpg')
                            ->changeFill(static fn ($item) => $item?->seo?->og_image ?? '')
                            ->canApply(static fn () => false),
                        Text::make('Canonical URL', 'seo_canonical_url')
                            ->prefix('https://website.tld/')
                            ->placeholder('slug')
                            ->changeFill(static fn ($item) => $item?->seo?->canonical_url ?? '')
                            ->canApply(static fn () => false),
                        Text::make('Robots', 'seo_robots')
                            ->placeholder('index,follow or noindex,nofollow')
                            ->changeFill(static fn ($item) => $item?->seo?->robots ?? '')
                            ->canApply(static fn () => false),
                    ])->open(true),
                ])->columnSpan(4),
            ]),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

    protected function rules(DataWrapperContract $item): array
    {
        return [
            'title' => ['string', 'required'],
            'slug' => ['string', 'required'],
            'excerpt' => ['string', 'required'],
            'content' => ['string', 'required'],
            'thumbnail' => ['image', 'sometimes'],
            'is_published' => ['boolean', 'required'],
            'published_at' => ['date', 'required'],
            'categories' => ['array', 'nullable'],
            'tags_list' => ['string', 'nullable'],
            'seo_meta_title' => ['string', 'nullable'],
            'seo_meta_description' => ['string', 'nullable'],
            'seo_og_title' => ['string', 'nullable'],
            'seo_og_description' => ['string', 'nullable'],
            'seo_og_image' => ['string', 'nullable'],
            'seo_canonical_url' => ['string', 'nullable'],
            'seo_robots' => ['string', 'nullable'],
        ];
    }

    /**
     * @param  FormBuilder  $component
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
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
