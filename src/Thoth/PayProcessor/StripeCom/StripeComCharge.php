<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/StripeCom/StripeComCharge.json
 */
class StripeComCharge
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/PayProcessor/StripeCom/StripeComCharge.json.
     *
     * @return StripeComChargeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StripeComChargeGetRequest $request): StripeComChargeGetResponse
    {
        return new StripeComChargeGetResponse($this->client->request('/Thoth/PayProcessor/StripeCom/StripeComCharge.json', $request->params(), 'GET'));
    }
}
