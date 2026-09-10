<?php

namespace WlSdk\Wl\Appointment\Cancel;

use WlSdk\WlSdkClient;

/**
 * Returns data for appointment cancellation confirm.
 */
class Confirm
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns data for appointment cancellation confirm.
     *
     * Validates access to the appointment and business, then loads the notification pattern,
     *  cancellation status, and blame or fee information for the appointment being cancelled. For
     *  recurring appointments, also loads the date range and the list of individual appointments
     *  available for cancellation.
     *
     * @return ConfirmGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConfirmGetRequest $request): ConfirmGetResponse
    {
        return new ConfirmGetResponse($this->client->request('/Wl/Appointment/Cancel/Confirm.json', $request->params(), 'GET'));
    }

    /**
     * Cancels appointment.
     *
     * Validates access to the appointment and business, then saves the notification pattern for the
     *  cancellation. For recurring appointments, cancels every appointment in the selected date
     *  range through an asynchronous visit change, optionally records the cancellation reason, and
     *  removes the repeat-generation task when an entire endless series is cancelled. For a single
     *  appointment, delegates the cancellation to `post()`.
     *
     * @return ConfirmPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConfirmPostRequest $request): ConfirmPostResponse
    {
        return new ConfirmPostResponse($this->client->request('/Wl/Appointment/Cancel/Confirm.json', $request->params(), 'POST'));
    }
}
