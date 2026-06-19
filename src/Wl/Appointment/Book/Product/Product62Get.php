<?php
namespace WlSdk\Wl\Appointment\Book\Product;

use WlSdk\WlSdkClient;

/**
 * Retrieves list of available service add-ons.
 */
class Product62Get
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
     * Returns active add-on products for the specified service and location, filtered by the given
     *  client's login type when a UID is provided. Products with a purchase restriction that does not
     *  match the client type are excluded from the result.
     *
     * @return Product62GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Product62GetRequest $request): Product62GetResponse
    {
        return new Product62GetResponse($this->client->request('/Wl/Appointment/Book/Product/Product62.json', $request->params(), 'GET'));
    }
}
