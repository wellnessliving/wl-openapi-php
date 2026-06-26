<?php

namespace WlSdk\Wl\Schedule;

use WlSdk\WlSdkClient;

/**
 * Returns parsed template for the schedule page.
 */
class Schedule
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns parsed template for the schedule page.
     *
     * @return ScheduleGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleGetRequest $request): ScheduleGetResponse
    {
        return new ScheduleGetResponse($this->client->request('/Wl/Schedule/Schedule.json', $request->params(), 'GET'));
    }
}
