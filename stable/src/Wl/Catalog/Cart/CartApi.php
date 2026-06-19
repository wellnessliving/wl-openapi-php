<?php
namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Gets purchase cost data.
 */
class CartApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets purchase cost data.
     *
     * Used in the client-facing checkout flow to show a live price summary before the client submits
     * payment. Calculates the full breakdown - subtotal, taxes, applied discounts, reward redemptions,
     * and tips - so the client can review the total before confirming.
     *
     * @return CartApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CartApiGetResponse
    {
        return new CartApiGetResponse($this->client->request('/Wl/Catalog/Cart/Cart.json', $this->params(), 'GET'));
    }

    private function params(): array
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
            static fn($v) => $v !== null
        );
    }
}
