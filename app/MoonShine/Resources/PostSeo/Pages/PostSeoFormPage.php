<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\PostSeo\Pages;

use App\MoonShine\Resources\PostSeo\PostSeoResource;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;

/**
 * @extends FormPage<PostSeoResource>
 */
class PostSeoFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Grid::make([
                Column::make([
                    ID::make('id'),
                    Text::make('Meta Title', 'meta_title'),
                    Textarea::make('Meta Description', 'meta_description'),
                    Text::make('OG Title', 'og_title'),
                    Textarea::make('OG Description', 'og_description'),
                    Image::make('OG Image', 'og_image')
                        ->disk('public')
                        ->dir('seo'),
                    Text::make('Canonical URL', 'canonical_url')
                        ->placeholder('https://example.com/path'),
                    Text::make('Robots', 'robots')
                        ->placeholder('index,follow or noindex,nofollow'),
                ])->columnSpan(12),

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
            'meta_title' => ['string', 'nullable'],
            'meta_description' => ['string', 'nullable'],
            'og_title' => ['string', 'nullable'],
            'og_description' => ['string', 'nullable'],
            'og_image' => ['image', 'nullable'],
            'canonical_url' => ['string', 'nullable'],
            'robots' => ['string', 'nullable'],
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
