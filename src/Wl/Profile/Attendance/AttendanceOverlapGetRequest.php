<?php
namespace WlSdk\Wl\Profile\Attendance;

class AttendanceOverlapGetRequest
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

    public function params(): array
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
