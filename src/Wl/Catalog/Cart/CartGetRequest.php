<?php

namespace WlSdk\Wl\Catalog\Cart;

class CartGetRequest
{
    /**
     * The list of items in the cart.
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * Whether selected login prize should be auto applied to first applicable item.
     *
     * @var bool|null
     */
    public ?bool $is_auto_apply_prize = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The login prize key.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * The discount code.
     *
     * If `null`, the discount code has been reset.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * The user key.
     *
     * This will be `0` for guests.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_item' => $this->a_item,
            'is_auto_apply_prize' => $this->is_auto_apply_prize,
            'k_location' => $this->k_location,
            'k_login_prize' => $this->k_login_prize,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
