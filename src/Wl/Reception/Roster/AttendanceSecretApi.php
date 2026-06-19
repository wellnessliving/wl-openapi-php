<?php
namespace WlSdk\Wl\Reception\Roster;

use WlSdk\WlSdkClient;

/**
 * Gets the secret string for Attendance Kiosk requests.
 */
class AttendanceSecretApi
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

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
     * @return AttendanceSecretApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AttendanceSecretApiGetResponse
    {
        return new AttendanceSecretApiGetResponse($this->client->request('/Wl/Reception/Roster/AttendanceSecret.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
