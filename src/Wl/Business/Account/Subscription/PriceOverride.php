<?php

namespace WlSdk\Wl\Business\Account\Subscription;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/PriceOverride.json
 */
class PriceOverride
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Account/Subscription/PriceOverride.json.
     *
     * @return PriceOverrideGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PriceOverrideGetRequest $request): PriceOverrideGetResponse
    {
        return new PriceOverrideGetResponse($this->client->request('/Wl/Business/Account/Subscription/PriceOverride.json', $request->params(), 'GET'));
    }
}
