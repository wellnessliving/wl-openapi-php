<?php

namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Gets information about a client who has just checked in.
 */
class AttendanceConfirmationScreen
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about a client who has just checked in.
     *
     * @return AttendanceConfirmationScreenGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttendanceConfirmationScreenGetRequest $request): AttendanceConfirmationScreenGetResponse
    {
        return new AttendanceConfirmationScreenGetResponse($this->client->request('/Wl/Reception/Roster/AttendanceConfirmationScreen.json', $request->params(), 'GET'));
    }
}
