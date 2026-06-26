<?php

namespace WlSdk\Thoth\PayHardware\StripeCom;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayHardware/StripeCom/StripeComHardwareList.json
 */
class StripeComHardwareList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/PayHardware/StripeCom/StripeComHardwareList.json.
     *
     * @return StripeComHardwareListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StripeComHardwareListGetRequest $request): StripeComHardwareListGetResponse
    {
        return new StripeComHardwareListGetResponse($this->client->request('/Thoth/PayHardware/StripeCom/StripeComHardwareList.json', $request->params(), 'GET'));
    }
}
