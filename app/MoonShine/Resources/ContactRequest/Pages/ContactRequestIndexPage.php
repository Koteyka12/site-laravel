<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ContactRequest\Pages;

use App\Enums\ContactRequestStatus;
use App\MoonShine\Resources\ContactRequest\ContactRequestResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\Support\Attributes\AsyncMethod;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use Throwable;

/**
 * @extends IndexPage<ContactRequestResource>
 */
class ContactRequestIndexPage extends IndexPage
{
    protected bool $isLazy = true;

    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make('ID', 'id'),
            Text::make('Name', 'name'),
            Text::make('E-Mail', 'email'),
            Text::make('Betreff', 'subject'),
            Select::make('Status', 'status')
                ->options(ContactRequestStatus::options())
                ->updateOnPreview(),
            Date::make('Eingegangen', 'created_at')
                ->withTime()
                ->format('d.m.Y H:i'),
        ];
    }

    #[AsyncMethod]
    public function sort(Request $request): Response
    {
        return $this->getResource()->sort($request);
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @param  TableBuilder  $component
     * @return TableBuilder
     */
    protected function modifyListComponent(ComponentContract $component): ComponentContract
    {
        return $this->getResource()->modifyListComponent($component);
    }

    public function getListEventName(?string $name = null, array $params = []): string
    {
        return $this->getResource()->getListEventName($name, $params);
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
