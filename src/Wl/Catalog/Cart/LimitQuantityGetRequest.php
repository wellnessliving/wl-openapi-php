<?php
namespace WlSdk\Wl\Catalog\Cart;

class LimitQuantityGetRequest
{
    /**
     * The cart items list with the next structure:
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * The business in which the purchase will be made.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The promotion key to add to the cart.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_item' => $this->a_item,
            'k_business' => $this->k_business,
            'k_promotion' => $this->k_promotion,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
