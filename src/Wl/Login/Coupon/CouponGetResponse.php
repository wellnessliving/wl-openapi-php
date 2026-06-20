<?php

namespace WlSdk\Wl\Login\Coupon;

/**
 * Response from GET
 */
class CouponGetResponse
{
    /**
     * The gift card reference number for this specific user. WellnessLiving uses this reference number for
     * managing
     * gift cards in the system.
     *
     * @var string|null
     */
    public ?string $k_login_coupon = null;

    /**
     * The gift card amount.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    public function __construct(array $data)
    {
        $this->k_login_coupon = isset($data['k_login_coupon']) ? (string)$data['k_login_coupon'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
    }
}
