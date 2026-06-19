<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

use WlSdk\WlSdkClient;

/**
 * Calculates amount of cart.
 */
class CatalogCartGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates amount of cart.
     *
     * Used in the staff app checkout flow to show a live price summary before the staff member processes
     * a client's payment. Returns the full breakdown so the staff member can confirm the total with
     * the client before charging.
     *
     * @return CatalogCartGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CatalogCartGetRequest $request): CatalogCartGetResponse
    {
        return new CatalogCartGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogCart/CatalogCart.json', $request->params(), 'GET'));
    }
}
