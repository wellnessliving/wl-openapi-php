<?php

namespace WlSdk\Wl\Purchase\Staff;

use WlSdk\WlSdkClient;

/**
 * Gets information about staff commission for the purchase item.
 */
class PurchaseStaffCommission
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about staff commission for the purchase item.
     *
     * @return PurchaseStaffCommissionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseStaffCommissionGetRequest $request): PurchaseStaffCommissionGetResponse
    {
        return new PurchaseStaffCommissionGetResponse($this->client->request('/Wl/Purchase/Staff/PurchaseStaffCommission.json', $request->params(), 'GET'));
    }

    /**
     * Saves staff commission for the purchase items.
     *
     * @return PurchaseStaffCommissionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PurchaseStaffCommissionPostRequest $request): PurchaseStaffCommissionPostResponse
    {
        return new PurchaseStaffCommissionPostResponse($this->client->request('/Wl/Purchase/Staff/PurchaseStaffCommission.json', $request->params(), 'POST'));
    }
}
