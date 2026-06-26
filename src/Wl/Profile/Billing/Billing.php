<?php

namespace WlSdk\Wl\Profile\Billing;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about billing page display properties.
 */
class Billing
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about billing page display properties.
     *
     * @return BillingGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BillingGetRequest $request): BillingGetResponse
    {
        return new BillingGetResponse($this->client->request('/Wl/Profile/Billing/Billing.json', $request->params(), 'GET'));
    }
}
