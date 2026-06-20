<?php
namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Books a class for the client and marks the visit as attended via the Attendance Kiosk.
 */
class AttendanceListAttend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Books a class for the client and marks the visit as attended via the Attendance Kiosk.
     *
     * Validates the Attendance Kiosk secret, books the specified class period for the client, and immediately
     * marks
     * the resulting visit as attended.
     *
     * @return AttendanceListAttendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AttendanceListAttendPostRequest $request): AttendanceListAttendPostResponse
    {
        return new AttendanceListAttendPostResponse($this->client->request('/Wl/Reception/Roster/AttendanceListAttend.json', $request->params(), 'POST'));
    }
}
