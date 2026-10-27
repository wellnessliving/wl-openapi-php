<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of available appointment booking schedule.
 */
class DayTime78
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of available appointment booking schedule.
     *
     * Returns available time slots for the specified service, location, staff member, and date range.
     *  Each slot includes the start time, duration, available capacity, and staff information. Supports
     *  both frontend and backend modes, as well as asset bookings and back-to-back scheduling.
     *
     * @return DayTime78GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DayTime78GetRequest $request): DayTime78GetResponse
    {
        return new DayTime78GetResponse($this->client->request('/Wl/Appointment/Book/Schedule/DayTime78.json', $request->params(), 'GET'));
    }
}
