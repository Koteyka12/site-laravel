<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ContactRequest\Pages;

use App\Enums\ContactRequestStatus;
use App\MoonShine\Resources\ContactRequest\ContactRequestResource;
use Illuminate\Validation\Rule;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;

/**
 * @extends FormPage<ContactRequestResource>
 */
class ContactRequestFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Grid::make([
                Column::make([
                    Text::make('Name', 'name'),
                    Text::make('E-Mail', 'email'),
                    Text::make('Telefon', 'phone'),
                    Text::make('Betreff', 'subject'),
                    Textarea::make('Nachricht', 'message'),
                ])->columnSpan(6),
                Column::make([
                    Select::make('Status', 'status')
                        ->options(ContactRequestStatus::options())
                        ->default(ContactRequestStatus::Neu->value),
                    Date::make('Bearbeitet am', 'handled_at')
                        ->withTime()
                        ->format('d.m.Y H:i'),
                    Text::make('IP', 'ip_address')->readonly(),
                    Textarea::make('User Agent', 'user_agent')->readonly(),
                ])->columnSpan(6),
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
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['nullable', 'string', 'max:60'],
            'subject' => ['nullable', 'string', 'max:190'],
            'status' => ['required', Rule::enum(ContactRequestStatus::class)],
            'message' => ['required', 'string', 'max:4000'],
            'handled_at' => ['nullable', 'date'],
            'ip_address' => ['nullable', 'string', 'max:45'],
            'user_agent' => ['nullable', 'string'],
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
