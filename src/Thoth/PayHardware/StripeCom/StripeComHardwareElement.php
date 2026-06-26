<?php

namespace WlSdk\Thoth\PayHardware\StripeCom;

use WlSdk\WlSdkClient;

/**
 * Fetch terminal information.
 */
class StripeComHardwareElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Fetch terminal information.
     *
     * @return StripeComHardwareElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StripeComHardwareElementGetRequest $request): StripeComHardwareElementGetResponse
    {
        return new StripeComHardwareElementGetResponse($this->client->request('/Thoth/PayHardware/StripeCom/StripeComHardwareElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates terminal.
     *
     * @return StripeComHardwareElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StripeComHardwareElementPostRequest $request): StripeComHardwareElementPostResponse
    {
        return new StripeComHardwareElementPostResponse($this->client->request('/Thoth/PayHardware/StripeCom/StripeComHardwareElement.json', $request->params(), 'POST'));
    }

    /**
     * Removes terminal.
     *
     * @return StripeComHardwareElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(StripeComHardwareElementDeleteRequest $request): StripeComHardwareElementDeleteResponse
    {
        return new StripeComHardwareElementDeleteResponse($this->client->request('/Thoth/PayHardware/StripeCom/StripeComHardwareElement.json', $request->params(), 'DELETE'));
    }
}
