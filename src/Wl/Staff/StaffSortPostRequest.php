<?php

namespace WlSdk\Wl\Staff;

class StaffSortPostRequest
{
    /**
     * Sort order ID. One of {@link \WlSdk\Core\Sid\SortOrderSid} constants. `null` if custom sort order is
     * selected.
     *   See {@link \WlSdk\Wl\Backend\Setup\Staffs\StaffsSortSid}.
     *
     * @var int|null
     * @see \WlSdk\Core\Sid\SortOrderSid
     */
    public ?int $id_order = null;

    /**
     * Sort options ID, one of {@link \WlSdk\Wl\Backend\Setup\Staffs\StaffsSortSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Backend\Setup\Staffs\StaffsSortSid
     */
    public ?int $id_sort = null;

    /**
     * Whether sorting order is changed. `true` if changed, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_sort_changed = null;

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
            'is_sort_changed' => $this->is_sort_changed,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
