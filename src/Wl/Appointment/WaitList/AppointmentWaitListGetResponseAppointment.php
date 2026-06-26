<?php

namespace WlSdk\Wl\Appointment\WaitList;

class AppointmentWaitListGetResponseAppointment
{
    /**
     * Maximum number of clients on wait list for the appointment.
     *
     * @var int|null
     */
    public ?int $i_wait_list_limit = null;

    /**
     * `true` if the appointment is reserved for service, `false` if for asset.
     *
     * @var bool|null
     */
    public ?bool $is_service = null;

    /**
     * `true` to use service specific wait list limit, `false` to use the limit from default policies.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list_limit = null;

    /**
     * Local end datetime of the appointment.
     *
     * @var string|null
     */
    public ?string $dtl_session_end = null;

    /**
     * Local start datetime of the appointment.
     *
     * @var string|null
     */
    public ?string $dtl_session_start = null;

    /**
     * Service or asset title
     *
     * @var string|null
     */
    public ?string $text_appointment = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Staff name. `null` if the appointment is reserved for asset.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    public function __construct(array $data)
    {
        $this->i_wait_list_limit = isset($data['i_wait_list_limit']) ? (int)$data['i_wait_list_limit'] : null;
        $this->is_service = isset($data['is_service']) ? (bool)$data['is_service'] : null;
        $this->is_wait_list_limit = isset($data['is_wait_list_limit']) ? (bool)$data['is_wait_list_limit'] : null;
        $this->dtl_session_end = isset($data['dtl_session_end']) ? (string)$data['dtl_session_end'] : null;
        $this->dtl_session_start = isset($data['dtl_session_start']) ? (string)$data['dtl_session_start'] : null;
        $this->text_appointment = isset($data['text_appointment']) ? (string)$data['text_appointment'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
    }
}
