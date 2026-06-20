<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Returns all sale items available in the business for staff, optionally filtered by location and visit.
 */
class CatalogList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns all sale items available in the business for staff, optionally filtered by location and visit.
     *
     * Used in the staff app to populate the add-item picker during checkout. Returns the products and
     * services the staff member is allowed to sell at the current location. When a visit key is provided,
     * the list is filtered to items that are relevant to that visit.
     *
     * @return CatalogListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CatalogListGetRequest $request): CatalogListGetResponse
    {
        return new CatalogListGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogList/CatalogList.json', $request->params(), 'GET'));
    }
}
