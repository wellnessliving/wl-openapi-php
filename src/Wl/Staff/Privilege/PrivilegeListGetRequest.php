<?php

namespace WlSdk\Wl\Staff\Privilege;

class PrivilegeListGetRequest
{
    /**
     * Key of business to get privileges for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key to get privileges for.
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
