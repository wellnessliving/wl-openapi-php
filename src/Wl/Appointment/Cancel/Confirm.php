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
     * @return ConfirmPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConfirmPostRequest $request): ConfirmPostResponse
    {
        return new ConfirmPostResponse($this->client->request('/Wl/Appointment/Cancel/Confirm.json', $request->params(), 'POST'));
    }
}
