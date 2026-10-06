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
     * Returns the appointment or asset title, location, staff, and time slot, together with the
     *  ordered list of visits currently on the wait list, each with client, note, addon, resource
     *  and answer details. Also returns which notification channels are enabled for wait list mail.
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
