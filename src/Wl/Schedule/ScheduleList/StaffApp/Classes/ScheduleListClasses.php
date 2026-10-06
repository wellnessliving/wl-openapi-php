<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Classes;

use WlSdk\WlSdkClient;

/**
 * Gets a list of classes/events which must be represented on schedule.
 */
class ScheduleListClasses
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of classes/events which must be represented on schedule.
     *
     * Validates the business and checks the current user's schedule access, then loads the classes
     *  or events (depending on {@link \WlSdk\Wl\Schedule\ScheduleList\StaffApp\Classes\ScheduleListClasses}) that
     * should be selectable
     *  in the staff schedule filter, keyed by their key with the title as value.
     *
     * @return ScheduleListClassesGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListClassesGetRequest $request): ScheduleListClassesGetResponse
    {
        return new ScheduleListClassesGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Classes/ScheduleListClasses.json', $request->params(), 'GET'));
    }
}
