<?php

namespace WlSdk\Wl\Staff\Edit;

class ActiveServicesGetRequest
{
    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
