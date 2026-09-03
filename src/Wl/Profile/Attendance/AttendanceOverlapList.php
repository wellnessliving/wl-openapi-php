<?php

namespace WlSdk\Wl\Profile\Attendance;

use WlSdk\WlSdkClient;

/**
 * Checks whether the specified user has any existing bookings that overlap with a given time range or service.
 */
class AttendanceOverlapList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether the specified user has any existing bookings that overlap with a given time range or service.
     *
     * Used before scheduling to detect conflicts and prompt staff or the client with a warning.
     *
     * @return AttendanceOverlapListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AttendanceOverlapListPostRequest $request): AttendanceOverlapListPostResponse
    {
        return new AttendanceOverlapListPostResponse($this->client->request('/Wl/Profile/Attendance/AttendanceOverlapList.json', $request->params(), 'POST'));
    }
}
