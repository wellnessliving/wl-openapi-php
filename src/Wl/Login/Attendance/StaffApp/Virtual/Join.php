<?php

namespace WlSdk\Wl\Login\Attendance\StaffApp\Virtual;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Login/Attendance/StaffApp/Virtual/Join.json
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
     * Calls GET /Wl/Login/Attendance/StaffApp/Virtual/Join.json.
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
