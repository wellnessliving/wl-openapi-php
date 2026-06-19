<?php
namespace WlSdk\Wl\Profile\Attendance;

use WlSdk\WlSdkClient;

/**
 * Returns a list of visits that overlap with the specified service, class, resource, or time data.
 */
class AttendanceOverlapApi
{
    /**
     * Date of a selected service.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Duration of a service.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Whether an asset is booking. Needed in case when a client is allowed to select a date and time, then
     *   the available asset.
     *
     * @var bool|null
     */
    public ?bool $is_appointment = null;

    /**
     * Primary key of the business to add the user into.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Asset key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Key of timezone.
     * 
     * `null` if not set then use default timezone client.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * UID of a user.
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
     * Returns a list of visits that overlap with the specified service, class, resource, or time data.
     *
     * Checks whether the specified user has any existing bookings that overlap with a given time
     *  range or service. Used before scheduling to detect conflicts and prompt staff or the client
     *  with a warning.
     *
     * @return AttendanceOverlapApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AttendanceOverlapApiGetResponse
    {
        return new AttendanceOverlapApiGetResponse($this->client->request('/Wl/Profile/Attendance/AttendanceOverlap.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dtu_date' => $this->dtu_date,
            'i_duration' => $this->i_duration,
            'is_appointment' => $this->is_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'k_location' => $this->k_location,
            'k_resource' => $this->k_resource,
            'k_service' => $this->k_service,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
