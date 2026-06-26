<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Filter;

use WlSdk\WlSdkClient;

/**
 * Gets list of schedule filters available for given user.
 */
class ScheduleListFilter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of schedule filters available for given user.
     *
     * @return ScheduleListFilterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListFilterGetRequest $request): ScheduleListFilterGetResponse
    {
        return new ScheduleListFilterGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Filter/ScheduleListFilter.json', $request->params(), 'GET'));
    }
}
