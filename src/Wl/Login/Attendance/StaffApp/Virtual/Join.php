<?php

namespace WlSdk\Wl\Login\Attendance\StaffApp\Virtual;

use WlSdk\WlSdkClient;

/**
 * Gets information about the virtual service the client is joining.
 */
class Join
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about the virtual service the client is joining.
     *
     * Validates that the specified class period or appointment is a virtual service the current user
     *  may access, then returns the service name, its scheduled start time in UTC and local time,
     *  whether the business uses FitLIVE, and the redirect URL to the virtual meeting.
     *
     * @return JoinGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(JoinGetRequest $request): JoinGetResponse
    {
        return new JoinGetResponse($this->client->request('/Wl/Login/Attendance/StaffApp/Virtual/Join.json', $request->params(), 'GET'));
    }
}
