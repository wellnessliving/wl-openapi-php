<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Service;

use WlSdk\WlSdkClient;

/**
 * Gets a list of appointment services which must be represented on schedule.
 */
class ScheduleListService
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of appointment services which must be represented on schedule.
     *
     * @return ScheduleListServiceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListServiceGetRequest $request): ScheduleListServiceGetResponse
    {
        return new ScheduleListServiceGetResponse($this->client->request('/Wl/Schedule/ScheduleList/StaffApp/Service/ScheduleListService.json', $request->params(), 'GET'));
    }
}
