<?php
namespace WlSdk\Wl\Staff\StaffView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about staff.
 */
class StaffView
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
     * This method can accept or one staff key `k_staff` or staff list
     * `a_staff_list` but not both (exception would be thrown).
     *
     * @deprecated
     *
     * @return StaffViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StaffViewGetRequest $request): StaffViewGetResponse
    {
        return new StaffViewGetResponse($this->client->request('/Wl/Staff/StaffView/StaffView.json', $request->params(), 'GET'));
    }
}
