<?php
namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

use WlSdk\WlSdkClient;

/**
 * Gets schedule of business [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json) for day
 * [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json).
 */
class ScheduleListByTokenGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets schedule of business [ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json) for day
[ScheduleListApi](/Wl/Schedule/ScheduleList/StaffApp/ScheduleList.json).
     *
     * Returns all classes and appointments scheduled for the given business on the specified date,
     * sorted chronologically. Supports both single-day and date-range modes, and includes full
     * session details such as staff, visit counts, assets, and class images.
     *
     * @return ScheduleListByTokenGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListByTokenGetRequest $request): ScheduleListByTokenGetResponse
    {
        return new ScheduleListByTokenGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/ScheduleListByToken.json', $request->params(), 'GET'));
    }
}
