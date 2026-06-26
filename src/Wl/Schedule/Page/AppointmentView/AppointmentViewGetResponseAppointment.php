<?php

namespace WlSdk\Wl\Schedule\Page\AppointmentView;

class AppointmentViewGetResponseAppointment
{
    /**
     * End date of the appointment.
     *
     * @var array|null
     */
    public ?array $a_date_end = null;

    /**
     * Start date of the appointment.
     *
     * @var array|null
     */
    public ?array $a_date_start = null;

    /**
     * Description of the appointment.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Special instructions.
     *
     * @var string|null
     */
    public ?string $html_special = null;

    /**
     * `true` if the appointment is virtual, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * Location key. Primary key in the RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Appointment title.
     *
     * @var string|null
     */
    public ?string $text_service = null;

    /**
     * Staff name.
     *
     * @var string|null
     */
    public ?string $text_staff_name = null;

    /**
     * Timezone name.
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    /**
     * Staff uid. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->a_date_end = isset($data['a_date_end']) ? (array)$data['a_date_end'] : null;
        $this->a_date_start = isset($data['a_date_start']) ? (array)$data['a_date_start'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_service = isset($data['text_service']) ? (string)$data['text_service'] : null;
        $this->text_staff_name = isset($data['text_staff_name']) ? (string)$data['text_staff_name'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
