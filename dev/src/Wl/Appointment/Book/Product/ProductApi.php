<?php
namespace WlSdk\Wl\Appointment\Book\Product;

use WlSdk\WlSdkClient;

/**
 * Retrieves list of available service add-ons.
 */
class ProductApi
{
    /**
     * The key of a service to show information for.
     *
     * @var string|null
     */
    public ?string $k_service = null;

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
     * @return ProductApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ProductApiGetResponse
    {
        return new ProductApiGetResponse($this->client->request('/Wl/Appointment/Book/Product/Product.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_service' => $this->k_service,
            ],
            static fn($v) => $v !== null
        );
    }
}
