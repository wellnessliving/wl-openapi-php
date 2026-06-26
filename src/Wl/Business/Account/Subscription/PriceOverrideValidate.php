<?php

namespace WlSdk\Wl\Business\Account\Subscription;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Subscription/PriceOverrideValidate.json
 */
class PriceOverrideValidate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Account/Subscription/PriceOverrideValidate.json.
     *
     * @return PriceOverrideValidateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PriceOverrideValidateGetRequest $request): PriceOverrideValidateGetResponse
    {
        return new PriceOverrideValidateGetResponse($this->client->request('/Wl/Business/Account/Subscription/PriceOverrideValidate.json', $request->params(), 'GET'));
    }
}
