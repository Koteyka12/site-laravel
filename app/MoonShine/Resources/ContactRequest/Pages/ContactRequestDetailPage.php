<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ContactRequest\Pages;

use App\Enums\ContactRequestStatus;
use App\MoonShine\Resources\ContactRequest\ContactRequestResource;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\FieldsGroup;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;

/**
 * @extends DetailPage<ContactRequestResource>
 */
class ContactRequestDetailPage extends DetailPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ...$this->leftFields(),
            ...$this->rightFields(),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function modifyDetailComponent(ComponentContract $component): ComponentContract
    {
        $castedData = $this->getResource()->getCastedData();

        return Grid::make([
            Column::make([
                FieldsGroup::make($this->leftFields())
                    ->fill($castedData?->toArray() ?? [], $castedData)
                    ->previewMode(),
            ])->columnSpan(6),
            Column::make([
                FieldsGroup::make($this->rightFields())
                    ->fill($castedData?->toArray() ?? [], $castedData)
                    ->previewMode(),
            ])->columnSpan(6),
        ]);
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

    /**
     * @return list<FieldContract>
     */
    private function leftFields(): array
    {
        return [
            //            ID::make('ID', 'id'),
            Text::make('Name', 'name'),
            Text::make('E-Mail', 'email'),
            Text::make('Telefon', 'phone'),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    private function rightFields(): array
    {
        return [
            Text::make('Betreff', 'subject'),
            Textarea::make('Nachricht', 'message'),
            Select::make('Status', 'status')
                ->options(ContactRequestStatus::options()),
            Date::make('Bearbeitet am', 'handled_at')
                ->withTime()
                ->format('d.m.Y H:i'),
            Date::make('Eingegangen', 'created_at')
                ->withTime()
                ->format('d.m.Y H:i'),
        ];
    }
}
