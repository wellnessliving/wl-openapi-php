<?php

namespace WlSdk\Wl\Profile\Account\Select;

class SelectPostRequest
{
    /**
     * Business to retrieve relationship information.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID to retrieve relationship information.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * ID of relative to sign in.
     *
     * @var string|null
     */
    public ?string $uid_in = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'uid_in' => $this->uid_in,
            ],
            static fn ($v) => $v !== null
        );
    }
}
