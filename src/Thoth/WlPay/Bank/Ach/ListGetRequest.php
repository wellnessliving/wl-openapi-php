<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach;

class ListGetRequest
{
    /**
     * ID of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location to show information for.
     *
     * `0` to use user's home location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * ID of a user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
