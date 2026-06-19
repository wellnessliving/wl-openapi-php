<?php
namespace WlSdk\Wl\Login\Product;

use WlSdk\WlSdkClient;

/**
 * Returns information about products purchased by client.
 */
class ProductGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about products purchased by client.
     *
     * Accepts filters for business, user, location, payment method, product option, price range, and date range,
     * then returns a paginated list of product purchases with quantity, unit price, total amount, product name,
     * and
     * purchase location.
     *
     * @return ProductGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProductGetRequest $request): ProductGetResponse
    {
        return new ProductGetResponse($this->client->request('/Wl/Login/Product/Product.json', $request->params(), 'GET'));
    }
}
