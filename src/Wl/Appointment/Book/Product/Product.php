<?php
namespace WlSdk\Wl\Appointment\Book\Product;

use WlSdk\WlSdkClient;

/**
 * Retrieves list of available service add-ons.
 */
class Product
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves list of available service add-ons.
     *
     * Returns all active add-on products available for the specified service, including title, image,
     *  price, and quantity information. Results are not filtered by client type; use
     * [Product62Api](/Wl/Appointment/Book/Product/Product62.json)
     *  when filtering by client login type is required.
     *
     * @return ProductGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProductGetRequest $request): ProductGetResponse
    {
        return new ProductGetResponse($this->client->request('/Wl/Appointment/Book/Product/Product.json', $request->params(), 'GET'));
    }
}
