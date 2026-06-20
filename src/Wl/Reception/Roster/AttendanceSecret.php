<?php
namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Gets the secret string for Attendance Kiosk requests.
 */
class AttendanceSecret
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the secret string for Attendance Kiosk requests.
     *
     * Requires backend access and validates that the specified location belongs to the given business, then
     * returns
     * the secret token used to authenticate Attendance Kiosk API requests.
     *
     * @return AttendanceSecretGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AttendanceSecretGetRequest $request): AttendanceSecretGetResponse
    {
        return new AttendanceSecretGetResponse($this->client->request('/Wl/Reception/Roster/AttendanceSecret.json', $request->params(), 'GET'));
    }
}
