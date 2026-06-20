<?php

namespace WlSdk\Wl\Appointment\Info;

use WlSdk\WlSdkClient;

/**
 * Gets information about appointment.
 */
class Info
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about appointment.
     *
     * Returns detailed information about the specified appointment, including service details, staff member,
     *  date and time in the location's timezone, booking status, client information, and any associated
     *  assets or add-ons. Access is validated against the current user's permissions.
     *
     * @return InfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InfoGetRequest $request): InfoGetResponse
    {
        return new InfoGetResponse($this->client->request('/Wl/Appointment/Info/Info.json', $request->params(), 'GET'));
    }
}
