<?php

namespace WlSdk\Wl\Appointment\Book\Conflict;

use WlSdk\WlSdkClient;

/**
 * Gets booking conflicts.
 */
class Conflict56
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
     * @return Conflict56GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Conflict56GetRequest $request): Conflict56GetResponse
    {
        return new Conflict56GetResponse($this->client->request('/Wl/Appointment/Book/Conflict/Conflict56.json', $request->params(), 'GET'));
    }
}
