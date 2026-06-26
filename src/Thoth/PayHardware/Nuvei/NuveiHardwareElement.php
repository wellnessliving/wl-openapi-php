<?php

namespace WlSdk\Thoth\PayHardware\Nuvei;

use WlSdk\WlSdkClient;

/**
 * Fetch terminal information.
 */
class NuveiHardwareElement
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
     * @return NuveiHardwareElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NuveiHardwareElementGetRequest $request): NuveiHardwareElementGetResponse
    {
        return new NuveiHardwareElementGetResponse($this->client->request('/Thoth/PayHardware/Nuvei/NuveiHardwareElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates terminal.
     *
     * @return NuveiHardwareElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiHardwareElementPostRequest $request): NuveiHardwareElementPostResponse
    {
        return new NuveiHardwareElementPostResponse($this->client->request('/Thoth/PayHardware/Nuvei/NuveiHardwareElement.json', $request->params(), 'POST'));
    }

    /**
     * Removes terminal.
     *
     * @return NuveiHardwareElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(NuveiHardwareElementDeleteRequest $request): NuveiHardwareElementDeleteResponse
    {
        return new NuveiHardwareElementDeleteResponse($this->client->request('/Thoth/PayHardware/Nuvei/NuveiHardwareElement.json', $request->params(), 'DELETE'));
    }
}
