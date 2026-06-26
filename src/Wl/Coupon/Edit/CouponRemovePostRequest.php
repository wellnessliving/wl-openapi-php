<?php

namespace WlSdk\Wl\Coupon\Edit;

class CouponRemovePostRequest
{
    /**
     * ID of the Gift Card that should be removed.
     * Primary key from RsCouponSql.
     *
     * @var string|null
     */
    public ?string $k_coupon = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_coupon' => $this->k_coupon,
            ],
            static fn ($v) => $v !== null
        );
    }
}
