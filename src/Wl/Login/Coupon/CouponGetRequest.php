<?php
namespace WlSdk\Wl\Login\Coupon;

class CouponGetRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The gift card.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_code' => $this->s_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
