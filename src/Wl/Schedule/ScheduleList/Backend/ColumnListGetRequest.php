<?php

namespace WlSdk\Wl\Schedule\ScheduleList\Backend;

class ColumnListGetRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
