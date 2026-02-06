<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ContactRequest;

use App\Enums\ContactRequestStatus;
use App\Models\ContactRequest;
use App\MoonShine\Resources\ContactRequest\Pages\ContactRequestDetailPage;
use App\MoonShine\Resources\ContactRequest\Pages\ContactRequestFormPage;
use App\MoonShine\Resources\ContactRequest\Pages\ContactRequestIndexPage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Leeto\MoonShineKanBan\Resources\KanBanResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\MenuManager\Attributes\Group;
use MoonShine\MenuManager\Attributes\Order;
use MoonShine\Support\Attributes\AsyncMethod;
use MoonShine\Support\Attributes\Icon;

/**
 * @extends KanBanResource<ContactRequest, ContactRequestIndexPage, ContactRequestFormPage, ContactRequestDetailPage>
 */
#[Icon('at-symbol')]
#[Group('Kontakt')]
#[Order(10)]
class ContactRequestResource extends KanBanResource
{
    protected string $model = ContactRequest::class;

    protected string $title = 'Kontaktanfragen';

    protected string $column = 'name';

    protected string $sortColumn = 'sorting';

    protected ?string $description = 'subject';

    protected bool $detailInModal = true;

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ContactRequestIndexPage::class,
            ContactRequestFormPage::class,
            ContactRequestDetailPage::class,
        ];
    }

    public function statuses(): Collection
    {
        return collect(ContactRequestStatus::options());
    }

    public function foreignKey(): string
    {
        return 'status';
    }

    #[AsyncMethod]
    public function sort(Request $request): Response
    {
        $keyName = $this->getModel()->getKeyName();
        $model = $this->getModel();
        $status = (string) $request->input('parent');
        $statusOptions = ContactRequestStatus::options();
        if (! array_key_exists($status, $statusOptions)) {
            $status = (string) (array_search($status, $statusOptions, true) ?: $status);
        }
        $itemId = $request->input('id');

        if ($itemId === null) {
            logger()->warning('Kanban sort: missing payload', [
                'method' => $request->getMethod(),
                'content_type' => $request->headers->get('content-type'),
                'query' => $request->query->all(),
                'payload' => $request->all(),
                'uri' => $request->getRequestUri(),
                'full_url' => $request->fullUrl(),
            ]);
        }

        $item = $model->newModelQuery()->firstWhere($keyName, $itemId);

        if ($item) {
            $update = [
                $this->getSortColumn() => $request->integer('index'),
                $this->foreignKey() => $status,
            ];

            if ($status === ContactRequestStatus::Abgeschlossen->value && $item->handled_at === null) {
                $update['handled_at'] = now();
            }

            $item->update($update);
        } else {
            logger()->warning('Kanban sort: item not found', [
                'id' => $itemId,
                'parent' => $request->input('parent'),
                'index' => $request->input('index'),
                'data' => $request->input('data'),
            ]);
        }

        if ($request->filled('data')) {
            $ids = $request->str('data')
                ->explode(',')
                ->values();

            foreach ($ids as $index => $id) {
                $query = $model->newModelQuery()->where($keyName, $id);

                if ($request->has('parent')) {
                    $query->where($this->foreignKey(), $request->input('parent'));
                }

                $query->update([
                    $this->getSortColumn() => (int) $index,
                ]);
            }
        }

        return response()->noContent();
    }

    /**
     * @return array<int, \MoonShine\Contracts\UI\ActionButtonContract>
     */
    public function getIndexButtons(): array
    {
        return [
            $this->getDetailButton()->icon('eye'),
            $this->getEditButton(isAsync: $this->isAsync())->icon('pencil'),
            $this->getDeleteButton(
                redirectAfterDelete: $this->getRedirectAfterDelete(),
                isAsync: $this->isAsync(),
            )->icon('trash'),
        ];
    }
}
