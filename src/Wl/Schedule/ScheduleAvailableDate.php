<?php
namespace WlSdk\Wl\Schedule;

use WlSdk\WlSdkClient;

/**
 * Finds the nearest class session that can be booked by the current user.
 */
class ScheduleAvailableDate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds the nearest class session that can be booked by the current user.
     *
     * Looks no further than `PERIOD_LIMIT` seconds ahead from the start date.
     *
     * @return ScheduleAvailableDateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleAvailableDateGetRequest $request): ScheduleAvailableDateGetResponse
    {
        return new ScheduleAvailableDateGetResponse($this->client->request('/Wl/Schedule/ScheduleAvailableDate.json', $request->params(), 'GET'));
    }
}
