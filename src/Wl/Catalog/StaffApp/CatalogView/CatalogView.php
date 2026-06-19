<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogView;

use WlSdk\WlSdkClient;

/**
 * Calculates price information about sale item.
 */
class CatalogView
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates price information about sale item.
     *
     * Used in the staff app checkout to show the real-time price of a single line item as the staff
     * member configures it (adjusting quantity, custom price, or proration). Returns the full tax
     * breakdown so the staff member sees exactly what the client will be charged.
     *
     * @return CatalogViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CatalogViewGetRequest $request): CatalogViewGetResponse
    {
        return new CatalogViewGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogView/CatalogView.json', $request->params(), 'GET'));
    }
}
