<?php

namespace WlSdk\Wl\Coupon\CouponList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * A list of gift cards. Every element has the following keys:
     *
     * @var ListGetResponseCoupon[]|null
     */
    public ?array $a_coupon = null;

    public function __construct(array $data)
    {
        $this->a_coupon = isset($data['a_coupon']) ? array_map(static fn ($item) => new ListGetResponseCoupon((array)$item), (array)$data['a_coupon']) : null;
    }
}
