<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCommission;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Catalog/StaffApp/CatalogCommission/CatalogCommission.json
 */
class CatalogCommission
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Catalog/StaffApp/CatalogCommission/CatalogCommission.json.
     *
     * @return CatalogCommissionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CatalogCommissionGetRequest $request): CatalogCommissionGetResponse
    {
        return new CatalogCommissionGetResponse($this->client->request('/Wl/Catalog/StaffApp/CatalogCommission/CatalogCommission.json', $request->params(), 'GET'));
    }
}
