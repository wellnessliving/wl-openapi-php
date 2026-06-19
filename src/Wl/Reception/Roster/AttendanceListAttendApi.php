<?php
namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Books a class for the client and marks the visit as attended via the Attendance Kiosk.
 */
class AttendanceListAttendApi
{
    /**
     * The UTC datetime for the class in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The secret for authenticating the attendance kiosk.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * The client's user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
     * @return AttendanceListAttendApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): AttendanceListAttendApiPostResponse
    {
        return new AttendanceListAttendApiPostResponse($this->client->request('/Wl/Reception/Roster/AttendanceListAttend.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dtu_date' => $this->dtu_date,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_secret' => $this->s_secret,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
