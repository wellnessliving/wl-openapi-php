<?php

namespace WlSdk\Wl\Schedule;

use WlSdk\WlSdkClient;

/**
 * Returns parsed template for the schedule page.
 */
class SchedulePostBased
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
     * @return SchedulePostBasedGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SchedulePostBasedGetRequest $request): SchedulePostBasedGetResponse
    {
        return new SchedulePostBasedGetResponse($this->client->request('/Wl/Schedule/SchedulePostBased.json', $request->params(), 'GET'));
    }

    /**
     * Processes POST request to get the schedule for printing.
     *
     * Delegates to `get()` to avoid code duplication.
     * Using POST avoids 414 (Request-URI Too Large) errors when `s_data` is large.
     *
     * @return SchedulePostBasedPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SchedulePostBasedPostRequest $request): SchedulePostBasedPostResponse
    {
        return new SchedulePostBasedPostResponse($this->client->request('/Wl/Schedule/SchedulePostBased.json', $request->params(), 'POST'));
    }
}
