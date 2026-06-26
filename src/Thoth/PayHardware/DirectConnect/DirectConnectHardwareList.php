<?php

namespace WlSdk\Thoth\PayHardware\DirectConnect;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayHardware/DirectConnect/DirectConnectHardwareList.json
 */
class DirectConnectHardwareList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/PayHardware/DirectConnect/DirectConnectHardwareList.json.
     *
     * @return DirectConnectHardwareListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DirectConnectHardwareListGetRequest $request): DirectConnectHardwareListGetResponse
    {
        return new DirectConnectHardwareListGetResponse($this->client->request('/Thoth/PayHardware/DirectConnect/DirectConnectHardwareList.json', $request->params(), 'GET'));
    }
}
