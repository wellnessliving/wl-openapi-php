<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffPeriod;

use WlSdk\WlSdkClient;

/**
 * Returns working hours list for business staff members in given day.
 */
class StaffPeriod
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns working hours list for business staff members in given day.
     *
     * Resolves the staff members visible to the current user: a staff member with administrative or
     *  foreign-schedule privileges sees all active staff members, otherwise only their own working
     *  hours are returned. Returns the break and work periods for the requested date for each
     *  resolved staff member.
     *
     * @return StaffPeriodGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StaffPeriodGetRequest $request): StaffPeriodGetResponse
    {
        return new StaffPeriodGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffPeriod/StaffPeriod.json', $request->params(), 'GET'));
    }
}
