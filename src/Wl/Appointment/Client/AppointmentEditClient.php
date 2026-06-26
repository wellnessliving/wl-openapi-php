<?php

namespace WlSdk\Wl\Appointment\Client;

use WlSdk\WlSdkClient;

/**
 * Changes Appointment Client.
 */
class AppointmentEditClient
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes Appointment Client.
     *
     * @return AppointmentEditClientPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AppointmentEditClientPutRequest $request): AppointmentEditClientPutResponse
    {
        return new AppointmentEditClientPutResponse($this->client->request('/Wl/Appointment/Client/AppointmentEditClient.json', $request->params(), 'PUT'));
    }
}
