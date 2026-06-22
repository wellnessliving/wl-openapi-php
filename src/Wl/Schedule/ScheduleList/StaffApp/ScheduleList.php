<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

use WlSdk\WlSdkClient;

/**
 * Gets schedule of business `k_business` for day
 * `dt_date`.
 */
class ScheduleList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets schedule of business `k_business` for day
`dt_date`.
     *
     * Returns all classes and appointments scheduled for the given business on the specified date,
     * sorted chronologically. Supports both single-day and date-range modes, and includes full
     * session details such as staff, visit counts, assets, and class images.
     *
     * @return ScheduleListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListGetRequest $request): ScheduleListGetResponse
    {
        return new ScheduleListGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json', $request->params(), 'GET'));
    }
}
