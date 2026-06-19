<?php
namespace WlSdk\Wl\Login\Attendance;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about a single class period, appointment, or asset session.
 */
class AttendanceInfoGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns detailed information about a single class period, appointment, or asset session.
     *
     * Accepts either a class period key with a local date or an appointment key, validates access, and returns
     * scheduling details including title, start and end times, location, staff, assets, service type, and
     * default purchase option information.
     *
     * @return AttendanceInfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttendanceInfoGetRequest $request): AttendanceInfoGetResponse
    {
        return new AttendanceInfoGetResponse($this->client->request('/Wl/Login/Attendance/AttendanceInfo.json', $request->params(), 'GET'));
    }
}
