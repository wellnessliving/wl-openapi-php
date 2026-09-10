<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Staff;

use WlSdk\WlSdkClient;

/**
 * Gets information about staff members of business.
 */
class ScheduleListStaff
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about staff members of business.
     *
     * Returns the staff members configured to appear on the business schedule, identified by
     *  `uid_staff`. For applications in the `APPS_USE_OLD_K_STAFF` allow-list, the legacy `k_staff`
     *  list is also returned for backward compatibility.
     *
     * @return ScheduleListStaffGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListStaffGetRequest $request): ScheduleListStaffGetResponse
    {
        return new ScheduleListStaffGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Staff/ScheduleListStaff.json', $request->params(), 'GET'));
    }
}
