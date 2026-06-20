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
     * This method can accept or one staff key [StaffViewApi](/Wl/Staff/StaffView/StaffView.json) or staff list
     * [StaffViewApi](/Wl/Staff/StaffView/StaffView.json) but not both (exception would be thrown).
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
