<?php

namespace WlSdk\Wl\Staff\StaffView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about staff.
 */
class StaffView74
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about staff.
     *
     * This method can accept or one staff key {@link \WlSdk\Wl\Staff\StaffView\StaffView} or staff list
     * {@link \WlSdk\Wl\Staff\StaffView\StaffView} but not both (exception would be thrown).
     *
     * @return StaffView74GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StaffView74GetRequest $request): StaffView74GetResponse
    {
        return new StaffView74GetResponse($this->client->request('/Wl/Staff/StaffView/StaffView74.json', $request->params(), 'GET'));
    }
}
