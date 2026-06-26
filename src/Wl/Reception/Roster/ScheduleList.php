<?php

namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Retrieves schedule of sessions.
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
     * Retrieves schedule of sessions.
     *
     * @return ScheduleListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleListGetRequest $request): ScheduleListGetResponse
    {
        return new ScheduleListGetResponse($this->client->request('/Wl/Reception/Roster/ScheduleList.json', $request->params(), 'GET'));
    }
}
