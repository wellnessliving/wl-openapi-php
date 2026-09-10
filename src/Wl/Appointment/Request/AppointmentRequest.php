<?php

namespace WlSdk\Wl\Appointment\Request;

use WlSdk\WlSdkClient;

/**
 * Confirms or denies the appointment.
 */
class AppointmentRequest
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Confirms or denies the appointment.
     *
     * When `is_repeat` is `true`, applies the same confirmation or denial to every not yet
     *  answered instance of the recurring appointment, otherwise only the given appointment is
     *  affected. When `id_place` is the backend, the current user must have access to the business.
     *
     * @return AppointmentRequestPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AppointmentRequestPostRequest $request): AppointmentRequestPostResponse
    {
        return new AppointmentRequestPostResponse($this->client->request('/Wl/Appointment/Request/AppointmentRequest.json', $request->params(), 'POST'));
    }
}
