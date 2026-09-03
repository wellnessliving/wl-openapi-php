<?php

namespace WlSdk\Wl\Discount\Code;

class DiscountCodeGetRequest
{
    /**
     * List of event keys to filter the discount codes by.
     *
     * A discount code is returned if it applies to any of the given events, to any of the memberships in
     * {@link \WlSdk\Wl\Discount\Code\DiscountCode}, or to all purchase items.
     *
     * If both {@link \WlSdk\Wl\Discount\Code\DiscountCode} and {@link \WlSdk\Wl\Discount\Code\DiscountCode} are
     * empty,
     * discount codes are not filtered by applicability.
     *
     * @var string[]|null
     */
    public ?array $a_event_filter = null;

    /**
     * List of membership and passes keys to filter the discount codes by.
     *
     * A discount code is returned if it applies to any of the given memberships, to any of the events in
     * {@link \WlSdk\Wl\Discount\Code\DiscountCode}, or to all purchase items.
     *
     * If both {@link \WlSdk\Wl\Discount\Code\DiscountCode} and {@link \WlSdk\Wl\Discount\Code\DiscountCode} are
     * empty,
     * discount codes are not filtered by applicability.
     *
     * @var string[]|null
     */
    public ?array $a_promotion_filter = null;

    /**
     * Business key of the discount codes.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_event_filter' => $this->a_event_filter,
            'a_promotion_filter' => $this->a_promotion_filter,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
