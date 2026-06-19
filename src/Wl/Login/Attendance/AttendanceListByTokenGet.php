<?php
namespace WlSdk\Wl\Login\Attendance;

use WlSdk\WlSdkClient;

/**
 * Returns the attendance list for a class period or appointment session.
 */
class AttendanceListByTokenGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the attendance list for a class period or appointment session.
     *
     * Accepts either a class period key with a local date or an appointment key, validates access and date, and
     * returns
     * the active list, wait list, and confirmed list of attending clients, along with session capacity, wait list
     * limit,
     * and per-client details such as purchase option, visit status, wearables, and quiz responses.
     *
     * @return AttendanceListByTokenGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttendanceListByTokenGetRequest $request): AttendanceListByTokenGetResponse
    {
        return new AttendanceListByTokenGetResponse($this->client->request('/Wl/Login/Attendance/AttendanceListByToken.json', $request->params(), 'GET'));
    }
}
