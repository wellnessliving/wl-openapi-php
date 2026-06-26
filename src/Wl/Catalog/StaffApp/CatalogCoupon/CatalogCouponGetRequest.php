<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCoupon;

class CatalogCouponGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Coupon ID.
     * Primary key in RsCouponSql
     *
     * @var string|null
     */
    public ?string $k_coupon = null;

    /**
     * Coupon amount ID.
     * Primary key in AmountSql
     *
     * @var string|null
     */
    public ?string $k_coupon_amount = null;

    /**
     * Custom coupon code.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_coupon' => $this->k_coupon,
            'k_coupon_amount' => $this->k_coupon_amount,
            's_code' => $this->s_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
