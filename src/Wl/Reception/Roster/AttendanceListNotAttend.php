<?php

namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Marks the visit as not attended via the Attendance Kiosk.
 */
class AttendanceListNotAttend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Marks the visit as not attended via the Attendance Kiosk.
     *
     * Validates the Attendance Kiosk secret and updates the specified visit record to reflect that the client did
     * not attend the session.
     *
     * @return AttendanceListNotAttendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AttendanceListNotAttendPostRequest $request): AttendanceListNotAttendPostResponse
    {
        return new AttendanceListNotAttendPostResponse($this->client->request('/Wl/Reception/Roster/AttendanceListNotAttend.json', $request->params(), 'POST'));
    }
}
