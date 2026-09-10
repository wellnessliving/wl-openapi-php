<?php

namespace WlSdk\Wl\Appointment\Mark;

use WlSdk\WlSdkClient;

/**
 * Changes the attendance status of an appointment.
 */
class Mark
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes the attendance status of an appointment.
     *
     * Validates that the appointment belongs to the specified business and that the requesting
     *  user has access to mark it, then verifies the requested status transition is allowed based
     *  on the appointment's current visit and confirmation state. Applies the change within a
     *  database transaction.
     *
     * @return MarkPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MarkPostRequest $request): MarkPostResponse
    {
        return new MarkPostResponse($this->client->request('/Wl/Appointment/Mark/Mark.json', $request->params(), 'POST'));
    }
}
