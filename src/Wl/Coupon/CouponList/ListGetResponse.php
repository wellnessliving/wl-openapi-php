<?php
namespace WlSdk\Wl\Coupon\CouponList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_coupon = null;

    public function __construct(array $data)
    {
        $this->a_coupon = isset($data['a_coupon']) ? (array)$data['a_coupon'] : null;
    }
}
