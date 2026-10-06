<?php

namespace WlSdk\Wl\Appointment\Book\Conflict;

use WlSdk\WlSdkClient;

/**
 * Gets booking conflicts.
 */
class Conflict
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
     * @deprecated New version {@link \Wl\Appointment\Book\Conflict\Conflict56Api} should be used instead.
     *
     * @return ConflictGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConflictGetRequest $request): ConflictGetResponse
    {
        return new ConflictGetResponse($this->client->request('/Wl/Appointment/Book/Conflict/Conflict.json', $request->params(), 'GET'));
    }
}
