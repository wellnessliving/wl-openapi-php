<?php
namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Marks the visit as not attended via the Attendance Kiosk.
 */
class AttendanceListNotAttendApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The secret for authenticating the attendance kiosk.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

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
     * @return AttendanceListNotAttendApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): AttendanceListNotAttendApiPostResponse
    {
        return new AttendanceListNotAttendApiPostResponse($this->client->request('/Wl/Reception/Roster/AttendanceListNotAttend.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            's_secret' => $this->s_secret,
            ],
            static fn($v) => $v !== null
        );
    }
}
