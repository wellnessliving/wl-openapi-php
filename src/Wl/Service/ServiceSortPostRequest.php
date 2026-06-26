<?php

namespace WlSdk\Wl\Service;

class ServiceSortPostRequest
{
    /**
     * Sort order ID. One of {@link \WlSdk\Core\Sid\SortOrderSid} constants. `null` if custom sort order is
     * selected.
     *   See {@link \WlSdk\Wl\Backend\Setup\Services\ServicesSortSid}.
     *
     * @var int|null
     * @see \WlSdk\Core\Sid\SortOrderSid
     */
    public ?int $id_order = null;

    /**
     * Sort options ID, one of {@link \WlSdk\Wl\Backend\Setup\Services\ServicesSortSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Backend\Setup\Services\ServicesSortSid
     */
    public ?int $id_sort = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_order' => $this->id_order,
            'id_sort' => $this->id_sort,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
