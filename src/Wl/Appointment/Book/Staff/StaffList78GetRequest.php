<?php

namespace WlSdk\Wl\Appointment\Book\Staff;

class StaffList78GetRequest
{
    /**
     * The date/time of the appointment selected by user, in the location's time zone.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Count of clients on the appointment.
     *
     * Default value is 1.
     *
     * @var int|null
     */
    public ?int $i_client = 1;

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
     * @see \WlSdk\Wl\Login\LoginRoleSid
     */
    public ?int $id_role = 2;

    /**
     * `true` - returns service categories that have no staff members available to conduct them.
     * `false` - returns only service categories that have staff members available to conduct them.
     *
     * @var bool|null
     */
    public ?bool $is_unavailable = null;

    /**
     * Keys of the selected add-ons of the appointment, in JSON.
     *
     * For example `["12","34"]`. An empty string or an empty list if the appointment is booked without add-ons.
     * The
     * add-ons are services that are linked to the appointment as its add-ons. They run after the appointment, and
     * the
     * staff member of the appointment conducts them.
     *
     * @var string|null
     */
    public ?string $json_service_addon = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'i_client' => $this->i_client,
            'i_duration_custom' => $this->i_duration_custom,
            'id_role' => $this->id_role,
            'is_unavailable' => $this->is_unavailable,
            'json_service_addon' => $this->json_service_addon,
            'k_appointment_ignore' => $this->k_appointment_ignore,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
