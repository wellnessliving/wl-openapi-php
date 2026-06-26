<?php

namespace WlSdk\Wl\Appointment\Book\Promote;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Appointment/Book/Promote/AppointmentBookPromote.json
 */
class AppointmentBookPromote
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Appointment/Book/Promote/AppointmentBookPromote.json.
     *
     * @return AppointmentBookPromotePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AppointmentBookPromotePostRequest $request): AppointmentBookPromotePostResponse
    {
        return new AppointmentBookPromotePostResponse($this->client->request('/Wl/Appointment/Book/Promote/AppointmentBookPromote.json', $request->params(), 'POST'));
    }
}
