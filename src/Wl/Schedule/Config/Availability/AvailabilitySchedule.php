<?php

namespace WlSdk\Wl\Schedule\Config\Availability;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Schedule/Config/Availability/AvailabilitySchedule.json
 */
class AvailabilitySchedule
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Schedule/Config/Availability/AvailabilitySchedule.json.
     *
     * @return AvailabilityScheduleGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AvailabilityScheduleGetRequest $request): AvailabilityScheduleGetResponse
    {
        return new AvailabilityScheduleGetResponse($this->client->request('/Wl/Schedule/Config/Availability/AvailabilitySchedule.json', $request->params(), 'GET'));
    }
}
