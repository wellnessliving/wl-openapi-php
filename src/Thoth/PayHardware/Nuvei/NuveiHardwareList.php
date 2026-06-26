<?php

namespace WlSdk\Thoth\PayHardware\Nuvei;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayHardware/Nuvei/NuveiHardwareList.json
 */
class NuveiHardwareList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/PayHardware/Nuvei/NuveiHardwareList.json.
     *
     * @return NuveiHardwareListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NuveiHardwareListGetRequest $request): NuveiHardwareListGetResponse
    {
        return new NuveiHardwareListGetResponse($this->client->request('/Thoth/PayHardware/Nuvei/NuveiHardwareList.json', $request->params(), 'GET'));
    }
}
