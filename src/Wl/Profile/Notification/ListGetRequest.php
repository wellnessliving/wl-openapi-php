<?php

namespace WlSdk\Wl\Profile\Notification;

class ListGetRequest
{
    /**
     * Business key to show information for. Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of a user to show information for. Primary key in PassportLoginSql.
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
