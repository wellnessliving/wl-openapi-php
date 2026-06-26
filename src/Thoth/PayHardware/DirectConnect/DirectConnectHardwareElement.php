<?php

namespace WlSdk\Thoth\PayHardware\DirectConnect;

use WlSdk\WlSdkClient;

/**
 * Fetch terminal information.
 */
class DirectConnectHardwareElement
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
     * @return DirectConnectHardwareElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DirectConnectHardwareElementGetRequest $request): DirectConnectHardwareElementGetResponse
    {
        return new DirectConnectHardwareElementGetResponse($this->client->request('/Thoth/PayHardware/DirectConnect/DirectConnectHardwareElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates or updates terminal.
     *
     * @return DirectConnectHardwareElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DirectConnectHardwareElementPostRequest $request): DirectConnectHardwareElementPostResponse
    {
        return new DirectConnectHardwareElementPostResponse($this->client->request('/Thoth/PayHardware/DirectConnect/DirectConnectHardwareElement.json', $request->params(), 'POST'));
    }

    /**
     * Removes terminal.
     *
     * @return DirectConnectHardwareElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(DirectConnectHardwareElementDeleteRequest $request): DirectConnectHardwareElementDeleteResponse
    {
        return new DirectConnectHardwareElementDeleteResponse($this->client->request('/Thoth/PayHardware/DirectConnect/DirectConnectHardwareElement.json', $request->params(), 'DELETE'));
    }
}
