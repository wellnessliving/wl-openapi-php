<?php

namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Books a class for the client via the Attendance Kiosk and returns whether the client was placed on the class list or
 * waitlist.
 */
class AttendanceListBook
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Books a class for the client via the Attendance Kiosk and returns whether the client was placed on the class list or waitlist.
     *
     * Validates the Attendance Kiosk secret and books the client into the specified class period, returning a flag
     * indicating whether the client was placed on the class list or the waitlist.
     *
     * @return AttendanceListBookPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AttendanceListBookPostRequest $request): AttendanceListBookPostResponse
    {
        return new AttendanceListBookPostResponse($this->client->request('/Wl/Reception/Roster/AttendanceListBook.json', $request->params(), 'POST'));
    }
}
