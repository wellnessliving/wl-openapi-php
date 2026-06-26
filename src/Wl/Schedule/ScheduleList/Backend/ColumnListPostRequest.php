<?php

namespace WlSdk\Wl\Schedule\ScheduleList\Backend;

class ColumnListPostRequest
{
    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User's UID key.
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Column list.
     * Each element has next structure described here `a_column`
     *
     * @var array|null
     */
    public ?array $a_column_set = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_column_set' => $this->a_column_set,
            ],
            static fn ($v) => $v !== null
        );
    }
}
