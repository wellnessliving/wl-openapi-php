<?php

namespace WlSdk\Wl\Profile\Attendance;

use WlSdk\WlSdkClient;

/**
 * Checks a batch of candidate visits for booking overlaps.
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
     * Checks a batch of candidate visits for booking overlaps.
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
