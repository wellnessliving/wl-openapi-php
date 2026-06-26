<?php

namespace WlSdk\Wl\Login\Attendance\StaffApp\Virtual;

class JoinGetRequest
{
    /**
     * Date with time in UTC of class period `k_class_period`.
     * `null` - If the virtual service wait page is open for another type of service. For example: to the
     * appointment.
     *
     * @var string|null
     */
    public ?string $dtu_class_period = null;

    /**
     * Key of the virtual appointment. Primary key in RsAppointmentSql table.
     * `null` - If the virtual service wait page is open for another type of service. For example: to the class
     * period.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Key of the business, where session is going on.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the virtual class period. Primary key in RsClassPeriodSql table.
     * `null` - If the virtual service wait page is open for another type of service. For example: to the
     * appointment.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_class_period' => $this->dtu_class_period,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            ],
            static fn ($v) => $v !== null
        );
    }
}
