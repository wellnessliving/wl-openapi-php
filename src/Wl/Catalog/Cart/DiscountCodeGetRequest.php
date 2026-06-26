<?php

namespace WlSdk\Wl\Catalog\Cart;

class DiscountCodeGetRequest
{
    /**
     * Information about elements of purchase.
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * Business in which the purchase is made.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Discount code value.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * Customer UID.
     *
     * @var string|null
     */
    public ?string $uid_customer = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_item' => $this->a_item,
            'k_business' => $this->k_business,
            'text_discount_code' => $this->text_discount_code,
            'uid_customer' => $this->uid_customer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
