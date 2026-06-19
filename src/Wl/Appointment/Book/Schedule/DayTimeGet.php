<?php
namespace WlSdk\Wl\Appointment\Book\Schedule;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of available appointment booking schedule.
 *
 * @deprecated
 */
class DayTimeGet
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
     * @return DayTimeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DayTimeGetRequest $request): DayTimeGetResponse
    {
        return new DayTimeGetResponse($this->client->request('/Wl/Appointment/Book/Schedule/DayTime.json', $request->params(), 'GET'));
    }
}
