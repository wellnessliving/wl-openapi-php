<?php

namespace WlSdk\Wl\Catalog\Coupon;

class AmountCouponPostRequest
{
    /**
     * From where request comes. One of {@link \WlSdk\RsPlaceSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPlaceSid
     */
    public ?int $id_place = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Coupon key.
     *
     * @var string|null
     */
    public ?string $k_coupon = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_place' => $this->id_place,
            'k_business' => $this->k_business,
            'k_coupon' => $this->k_coupon,
            ],
            static fn ($v) => $v !== null
        );
    }
}
