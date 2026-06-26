<?php

namespace WlSdk\Wl\Catalog\Coupon;

/**
 * Response from POST
 */
class AmountCouponPostResponse
{
    /**
     * Amount coupon information.
     *
     * @var array|null
     */
    public ?array $a_cart_coupon = null;

    public function __construct(array $data)
    {
        $this->a_cart_coupon = isset($data['a_cart_coupon']) ? (array)$data['a_cart_coupon'] : null;
    }
}
