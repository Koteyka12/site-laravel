<?php

declare(strict_types=1);

namespace App\MoonShine\Components;

use Leeto\MoonShineKanBan\View\Components\KanBanComponent;

class ContactRequestKanbanComponent extends KanBanComponent
{
    protected function viewData(): array
    {
        $data = parent::viewData();

        $data['buttons'] = null;

        return $data;
    }
}
