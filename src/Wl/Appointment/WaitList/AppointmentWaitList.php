<?php

namespace WlSdk\Wl\Appointment\WaitList;

use WlSdk\WlSdkClient;

/**
 * Gets information about the appointment and wait list.
 */
class AppointmentWaitList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about the appointment and wait list.
     *
     * @return AppointmentWaitListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AppointmentWaitListGetRequest $request): AppointmentWaitListGetResponse
    {
        return new AppointmentWaitListGetResponse($this->client->request('/Wl/Appointment/WaitList/AppointmentWaitList.json', $request->params(), 'GET'));
    }
}
