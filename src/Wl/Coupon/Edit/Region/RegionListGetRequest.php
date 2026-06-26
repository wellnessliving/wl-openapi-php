<?php

namespace WlSdk\Wl\Coupon\Edit\Region;

class RegionListGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Coupon key.
     *
     * `null` if coupon is not created yet.
     *
     * @var string|null
     */
    public ?string $k_coupon = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_coupon' => $this->k_coupon,
            ],
            static fn ($v) => $v !== null
        );
    }
}
