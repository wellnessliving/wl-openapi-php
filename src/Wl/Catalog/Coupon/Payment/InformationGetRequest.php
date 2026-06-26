<?php

namespace WlSdk\Wl\Catalog\Coupon\Payment;

class InformationGetRequest
{
    /**
     * Business in which the purchase is made.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of the coupon, primary key in RsCouponSql.
     *
     * @var string|null
     */
    public ?string $k_coupon = null;

    /**
     * ID of the coupon amount, primary key in AmountSql.
     *
     * @var string|null
     */
    public ?string $k_coupon_amount = null;

    /**
     * Location primary key in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Custom amount for gift card.
     *
     * @var string|null
     */
    public ?string $m_custom = null;

    /**
     * Discount code.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_coupon' => $this->k_coupon,
            'k_coupon_amount' => $this->k_coupon_amount,
            'k_location' => $this->k_location,
            'm_custom' => $this->m_custom,
            'text_discount_code' => $this->text_discount_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
