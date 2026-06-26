<?php

namespace WlSdk\Wl\Schedule\Page\AppointmentView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about appointment.
 */
class AppointmentView
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about appointment.
     *
     * @return AppointmentViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AppointmentViewGetRequest $request): AppointmentViewGetResponse
    {
        return new AppointmentViewGetResponse($this->client->request('/Wl/Schedule/Page/AppointmentView/AppointmentView.json', $request->params(), 'GET'));
    }
}
