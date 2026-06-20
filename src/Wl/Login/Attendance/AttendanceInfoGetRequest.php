<?php
namespace WlSdk\Wl\Login\Attendance;

class AttendanceInfoGetRequest
{
    /**
     * Start date of the class in MySQL format in local time.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * ID of appointment to get information for.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * ID of business to get information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of class period to get information for.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_local' => $this->dt_date_local,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            ],
            static fn($v) => $v !== null
        );
    }
}
