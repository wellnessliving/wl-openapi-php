<?php

namespace WlSdk\Wl\Schedule\WorkingTime;

use WlSdk\WlSdkClient;

/**
 * Gets working hours for some staff.
 */
class StaffWorking
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets working hours for some staff.
     *
     * @return StaffWorkingGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StaffWorkingGetRequest $request): StaffWorkingGetResponse
    {
        return new StaffWorkingGetResponse($this->client->request('/Wl/Schedule/WorkingTime/StaffWorking.json', $request->params(), 'GET'));
    }
}
