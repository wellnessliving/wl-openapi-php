<?php
namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Checks limit quantity and whether a promotion can be added to the cart.
 */
class LimitQuantityApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks limit quantity and whether a promotion can be added to the cart.
     *
     * Used in the checkout flow to prevent a client from purchasing more passes than the promotion allows.
     * Returns the limit, how many the client has already bought, and how many are currently in the cart so
     * the UI can display a clear message if the limit would be exceeded.
     *
     * @return LimitQuantityApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LimitQuantityApiGetResponse
    {
        return new LimitQuantityApiGetResponse($this->client->request('/Wl/Catalog/Cart/LimitQuantity.json', $this->params(), 'GET'));
    }

    private function params(): array
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
