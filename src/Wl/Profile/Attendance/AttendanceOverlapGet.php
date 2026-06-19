<?php
namespace WlSdk\Wl\Profile\Attendance;

use WlSdk\WlSdkClient;

/**
 * Returns a list of visits that overlap with the specified service, class, resource, or time data.
 */
class AttendanceOverlapGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of visits that overlap with the specified service, class, resource, or time data.
     *
     * Checks whether the specified user has any existing bookings that overlap with a given time
     *  range or service. Used before scheduling to detect conflicts and prompt staff or the client
     *  with a warning.
     *
     * @return AttendanceOverlapGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttendanceOverlapGetRequest $request): AttendanceOverlapGetResponse
    {
        return new AttendanceOverlapGetResponse($this->client->request('/Wl/Profile/Attendance/AttendanceOverlap.json', $request->params(), 'GET'));
    }
}
