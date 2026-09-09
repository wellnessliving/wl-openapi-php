<?php

namespace WlSdk\Wl\Appointment\Book\Schedule;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list with all calendar days in specified period with available and unavailable appointment booking
 * schedule.
 */
class Calendar73
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list with all calendar days in specified period with available and unavailable appointment booking schedule.
     *
     * Returns each day in the requested month marked as available or unavailable for booking the given
     *  service at the given location. Availability is determined by the business schedule, holidays,
     *  and staff availability for the selected date range.
     *
     * @return Calendar73GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Calendar73GetRequest $request): Calendar73GetResponse
    {
        return new Calendar73GetResponse($this->client->request('/Wl/Appointment/Book/Schedule/Calendar73.json', $request->params(), 'GET'));
    }
}
