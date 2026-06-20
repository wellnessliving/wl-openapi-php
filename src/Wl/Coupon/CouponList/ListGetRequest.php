<?php

namespace WlSdk\Wl\Coupon\CouponList;

class ListGetRequest
{
    /**
     * Whether to return franchisee-created coupons (if business is franchisor).
     * `true` to include franchisee-created coupons.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * `true` to get only gift cards available for current user; `false` to get all gift cards.
     *
     * @var bool|null
     */
    public ?bool $is_frontend = null;

    /**
     * A flag to include disabled items in the query result
     *
     * @var bool|null
     */
    public ?bool $is_inactive_include = null;

    /**
     * The business key to retrieve a list of all the gift cards in a business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_franchise' => $this->is_franchise,
            'is_frontend' => $this->is_frontend,
            'is_inactive_include' => $this->is_inactive_include,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
