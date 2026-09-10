<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCommission;

use WlSdk\WlSdkClient;

/**
 * Retrieves the list of staff members eligible for commission along with the default staff
 * commission for the current client.
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
     * Retrieves the list of staff members eligible for commission along with the default staff
commission for the current client.
     *
     * Checks that the actor has access to the business and that commission-based payment is
     *  enabled. When enabled, loads the default staff commission assigned to the given client
     *  and the list of staff members with commission enabled, including their commission rates.
     *  For a small set of legacy applications, also returns the deprecated `k_staff` field for
     *  backward compatibility.
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
