<?php
namespace WlSdk\Wl\Login\Attendance;

class AttendanceListGetRequest
{
    /**
     * The local date of the class or event session.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * If `true`, then return the purchase used to pay for session.
     * Otherwise, do not return any purchase information.
     *
     * @var bool|null
     */
    public ?bool $is_purchase_info_return = null;

    /**
     * The appointment key. Not used if requesting information for a class or event session.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key. Not used if requesting information for an appointment.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_local' => $this->dt_date_local,
            'is_purchase_info_return' => $this->is_purchase_info_return,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            ],
            static fn($v) => $v !== null
        );
    }
}
