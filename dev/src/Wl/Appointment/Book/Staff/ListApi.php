<?php
namespace WlSdk\Wl\Appointment\Book\Staff;

use WlSdk\WlSdkClient;

/**
 * Retrieves an information about staff members for the current service.
 */
class ListApi
{
    /**
     * The date/time of the appointment selected by user, in the location's time zone.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Custom appointment duration in minutes.
     * 
     * `null` if not set.
     *
     * @var int|null
     */
    public ?int $i_duration_custom = null;

    /**
     * User role by whom this api called.
     * For different roles different results might be generated.
     *
     * @var int|null
     */
    public ?int $id_role = null;

    /**
     * `true` - returns service categories that have no staff members available to conduct them.
     * `false` - returns only service categories that have staff members available to conduct them.
     *
     * @var bool|null
     */
    public ?bool $is_unavailable = null;

    /**
     * Key of appointment which must be ignored when searches available staff.
     *
     * @var string|null
     */
    public ?string $k_appointment_ignore = null;

    /**
     * The key of the location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of a service for which to show information.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * User's timezone.
     * 
     * `null` until initialized or to use location timezone.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The user key for whom the service is booking.
     * 
     * `null` when not set.
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
     * Retrieves an information about staff members for the current service.
     *
     * Returns the list of staff members who can perform the specified service at the given location
     *  on the specified date and time. Each entry includes the staff member's name, image, gender,
     *  and availability. An 'any staff' option is included when the service allows random staff assignment.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Appointment/Book/Staff/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'i_duration_custom' => $this->i_duration_custom,
            'id_role' => $this->id_role,
            'is_unavailable' => $this->is_unavailable,
            'k_appointment_ignore' => $this->k_appointment_ignore,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
