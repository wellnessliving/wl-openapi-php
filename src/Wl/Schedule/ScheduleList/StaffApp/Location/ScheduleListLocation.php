<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Location;

use WlSdk\WlSdkClient;

/**
 * Gets a list of locations which must be represented on schedule to current user.
 */
class ScheduleListLocation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of locations which must be represented on schedule to current user.
     *
     * @return ScheduleListLocationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListLocationGetRequest $request): ScheduleListLocationGetResponse
    {
        return new ScheduleListLocationGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Location/ScheduleListLocation.json', $request->params(), 'GET'));
    }
}
