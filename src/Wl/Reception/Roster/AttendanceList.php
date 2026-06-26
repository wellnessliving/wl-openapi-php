<?php

namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Returns client list for specified class.
 */
class AttendanceList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns client list for specified class.
     *
     * Data expected in GET array:
     *
     * @return AttendanceListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttendanceListGetRequest $request): AttendanceListGetResponse
    {
        return new AttendanceListGetResponse($this->client->request('/Wl/Reception/Roster/AttendanceList.json', $request->params(), 'GET'));
    }
}
