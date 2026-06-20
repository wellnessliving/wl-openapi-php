<?php
namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Checks limit quantity and whether a promotion can be added to the cart.
 */
class LimitQuantity
{
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
     * @return LimitQuantityGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LimitQuantityGetRequest $request): LimitQuantityGetResponse
    {
        return new LimitQuantityGetResponse($this->client->request('/Wl/Catalog/Cart/LimitQuantity.json', $request->params(), 'GET'));
    }
}
