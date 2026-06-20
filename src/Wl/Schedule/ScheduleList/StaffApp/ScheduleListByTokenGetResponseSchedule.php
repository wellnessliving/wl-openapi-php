<?php
namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

class ScheduleListByTokenGetResponseSchedule
{
    /**
     * List of notes.
     *
     * @var string[]|null
     */
    public ?array $a_note = null;

    /**
     * Additional visit information about this appointment. Empty array if it's a class.
     *
     * @var ScheduleListByTokenGetResponseScheduleAppointmentVisitInfo|null
     */
    public ?ScheduleListByTokenGetResponseScheduleAppointmentVisitInfo $a_appointment_visit_info = null;

    /**
     * A list of assets involved in the session.
     *
     * @var string[]|null
     */
    public ?array $a_resource = null;

    /**
     * A list of staff members who will conduct the session.
     * 
     * Deprecated, use `a_staff_list` instead.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * Information about staff members who conduct this session. The keys are .
     * Values are array with data:
     *
     * @var ScheduleListByTokenGetResponseScheduleStaffInfo|null
     */
    public ?ScheduleListByTokenGetResponseScheduleStaffInfo $a_staff_info = null;

    /**
     * For appointments, this is a list of the names of users who are scheduled to attend the session.
     *
     * @var string[]|null
     */
    public ?array $a_user = null;

    /**
     * List of virtual locations. Each value is .
     *
     * @var string[]|null
     */
    public ?array $a_virtual_location = null;

    /**
     * The date/time of the session in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The date/time when the session was canceled in UTC. Only used for appointments.
     *
     * @var string|null
     */
    public ?string $dt_date_cancel = null;

    /**
     * The date/time of the session in local time.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * The number of clients booked into the session.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * The maximum capacity of the session.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * The duration of the session in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The padding time after the session in minutes. Only used for appointments.
     *
     * @var int|null
     */
    public ?int $i_padding_after = null;

    /**
     * The padding time before the session in minutes. Only used for appointments.
     *
     * @var int|null
     */
    public ?int $i_padding_before = null;

    /**
     * The start time in minutes after midnight.
     * For example, a class starting at 10:30 in the morning local time will have an `i_start` value of 630.
     *
     * @var int|null
     */
    public ?int $i_start = null;

    /**
     * Count clients on waitlist.
     *
     * @var int|null
     */
    public ?int $i_wait = null;

    /**
     * Appointment title display style.
     *  Set only for appointments, for others it will be equal to 0.
     *  Constants from {@link \WlSdk\Wl\Schedule\Design\OptionSid}.
     *
     * @var \WlSdk\Wl\Schedule\Design\OptionSid|null
     */
    public ?\WlSdk\Wl\Schedule\Design\OptionSid $id_option = null;

    /**
     * The ID of the service type. One of {@link \WlSdk\RsServiceSid} constants.
     *
     * @var \WlSdk\RsServiceSid|null
     */
    public ?\WlSdk\RsServiceSid $id_service = null;

    /**
     * For appointments: `true` if user has checked-in; `false` otherwise.
     * For classes always `null`.
     *
     * @var bool|null
     */
    public ?bool $is_arrive = null;

    /**
     * For appointments: `true` if appointment is paid; `false` otherwise.
     * For classes always `null`.
     *
     * @var bool|null
     */
    public ?bool $is_pay = null;

    /**
     * For appointments: `true` if appointment is recurring; `false` otherwise.
     * For classes always `null`.
     *
     * @var bool|null
     */
    public ?bool $is_repeat = null;

    /**
     * The appointment key.
     * If the session isn't an appointment, this will be `0`.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Confirmation date for appointment in MySQL format. Will be zero date + time in case appointment
     * is not yet confirmed by client.
     *
     * @var string|null
     */
    public ?string $dt_confirm = null;

    /**
     * The class key.
     * If the session isn't a class, this will be `0`.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The class period key.
     * If the session isn't a class, this will be `0`.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The location key for where the session takes place.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * This is the key of the appointment type, while `k_appointment` is the specific instance.
     * 
     * For other cases, this will be `0`.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The name of the session.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Alert message.
     *
     * @var string|null
     */
    public ?string $text_alert = null;

    /**
     * The background color in hex representation as used on WellnessLiving.
     *
     * @var string|null
     */
    public ?string $text_color_background = null;

    /**
     * The border color in hex representation as used on WellnessLiving.
     *
     * @var string|null
     */
    public ?string $text_color_border = null;

    /**
     * `true` - If the business has at least one virtual service, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual_service = null;

    /**
     * URL to image. Empty if image not exist.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->a_note = isset($data['a_note']) ? (array)$data['a_note'] : null;
        $this->a_appointment_visit_info = isset($data['a_appointment_visit_info']) ? new ScheduleListByTokenGetResponseScheduleAppointmentVisitInfo((array)$data['a_appointment_visit_info']) : null;
        $this->a_resource = isset($data['a_resource']) ? (array)$data['a_resource'] : null;
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->a_staff_info = isset($data['a_staff_info']) ? new ScheduleListByTokenGetResponseScheduleStaffInfo((array)$data['a_staff_info']) : null;
        $this->a_user = isset($data['a_user']) ? (array)$data['a_user'] : null;
        $this->a_virtual_location = isset($data['a_virtual_location']) ? (array)$data['a_virtual_location'] : null;
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->dt_date_cancel = isset($data['dt_date_cancel']) ? (string)$data['dt_date_cancel'] : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_padding_after = isset($data['i_padding_after']) ? (int)$data['i_padding_after'] : null;
        $this->i_padding_before = isset($data['i_padding_before']) ? (int)$data['i_padding_before'] : null;
        $this->i_start = isset($data['i_start']) ? (int)$data['i_start'] : null;
        $this->i_wait = isset($data['i_wait']) ? (int)$data['i_wait'] : null;
        $this->id_option = isset($data['id_option']) ? \WlSdk\Wl\Schedule\Design\OptionSid::tryFrom((int)$data['id_option']) : null;
        $this->id_service = isset($data['id_service']) ? \WlSdk\RsServiceSid::tryFrom((int)$data['id_service']) : null;
        $this->is_arrive = isset($data['is_arrive']) ? (bool)$data['is_arrive'] : null;
        $this->is_pay = isset($data['is_pay']) ? (bool)$data['is_pay'] : null;
        $this->is_repeat = isset($data['is_repeat']) ? (bool)$data['is_repeat'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->dt_confirm = isset($data['dt_confirm']) ? (string)$data['dt_confirm'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_alert = isset($data['text_alert']) ? (string)$data['text_alert'] : null;
        $this->text_color_background = isset($data['text_color_background']) ? (string)$data['text_color_background'] : null;
        $this->text_color_border = isset($data['text_color_border']) ? (string)$data['text_color_border'] : null;
        $this->is_virtual_service = isset($data['is_virtual_service']) ? (bool)$data['is_virtual_service'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
