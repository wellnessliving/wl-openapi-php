<?php

namespace WlSdk\Thoth\PayHardware;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayHardware/HardwareStaffPreference.json
 */
class HardwareStaffPreference
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayHardware/HardwareStaffPreference.json.
     *
     * @return HardwareStaffPreferencePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(HardwareStaffPreferencePostRequest $request): HardwareStaffPreferencePostResponse
    {
        return new HardwareStaffPreferencePostResponse($this->client->request('/Thoth/PayHardware/HardwareStaffPreference.json', $request->params(), 'POST'));
    }
}
