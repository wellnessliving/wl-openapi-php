<?php

namespace WlSdk\Wl\Appointment\Book\Conflict;

use WlSdk\WlSdkClient;

/**
 * Gets booking conflicts.
 */
class Conflict78
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets booking conflicts.
     *
     * Validates the requested date, duration, location, staff member, and either the selected
     *  asset or service, then checks for scheduling conflicts (staff working hours, holidays,
     *  asset availability) and, for services with an age restriction, for client age conflicts.
     *  The result is written to {@link \WlSdk\Wl\Appointment\Book\Conflict\Conflict56GetResponse::$a_conflict}.
     *
     * @return Conflict78GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Conflict78GetRequest $request): Conflict78GetResponse
    {
        return new Conflict78GetResponse($this->client->request('/Wl/Appointment/Book/Conflict/Conflict78.json', $request->params(), 'GET'));
    }
}
