<?php

namespace WlSdk\Wl\Schedule\ScheduleDesign;

class ScheduleDesignGetRequest
{
    /**
     * Business key.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in PassportLoginSql table.
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
