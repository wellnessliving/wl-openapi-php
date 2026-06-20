<?php
namespace WlSdk\Wl\Appointment\Info;

class InfoGetResponseNext
{
    /**
     * Start date and time of the next appointment in local time in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * `true` if visit has a note, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $has_note = null;

    /**
     * Duration of the next appointment in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * `true` if employees (staff) can view this appointment, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_view = null;

    /**
     * Next appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Visit key of next appointment.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Title of next appointment.
     *
     * @var string|null
     */
    public ?string $text_appointment_title = null;

    /**
     * Full staff name or empty if no staff assigned.
     *
     * @var string|null
     */
    public ?string $text_staff_name = null;

    public function __construct(array $data)
    {
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->has_note = isset($data['has_note']) ? (bool)$data['has_note'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->can_view = isset($data['can_view']) ? (bool)$data['can_view'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->text_appointment_title = isset($data['text_appointment_title']) ? (string)$data['text_appointment_title'] : null;
        $this->text_staff_name = isset($data['text_staff_name']) ? (string)$data['text_staff_name'] : null;
    }
}
