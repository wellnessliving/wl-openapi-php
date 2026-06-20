<?php
namespace WlSdk\Wl\Login\Attendance;

/**
 * Response from GET
 */
class AttendanceInfoByTokenGetResponse
{
    /**
     * Additional visit information about this appointment. Empty array if it's not an appointment:
     *
     * @var AttendanceInfoByTokenGetResponseAppointmentVisitInfo|null
     */
    public ?AttendanceInfoByTokenGetResponseAppointmentVisitInfo $a_appointment_visit_info = null;

    /**
     * Service logo information:
     *
     * @var AttendanceInfoByTokenGetResponseLogo|null
     */
    public ?AttendanceInfoByTokenGetResponseLogo $a_logo = null;

    /**
     * Default purchase option information.
     *
     * @var AttendanceInfoByTokenGetResponsePurchaseOptionDefault|null
     */
    public ?AttendanceInfoByTokenGetResponsePurchaseOptionDefault $a_purchase_option_default = null;

    /**
     * Assets which are bound to this session.
     *
     * @var string[]|null
     */
    public ?array $a_resource = null;

    /**
     * Asset layouts of session:
     *
     * @var AttendanceInfoByTokenGetResponseResourceLayout[]|null
     */
    public ?array $a_resource_layout = null;

    /**
     * List of staff members who provide service:
     *
     * @var AttendanceInfoByTokenGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * Confirmation date+time of appointment in MySQL format. If client never confirmed, will be zero date + time.
     *
     * @var string|null
     */
    public ?string $dt_confirm = null;

    /**
     * Start date of the session in MySQL format in GMT.
     *
     * @var string|null
     */
    public ?string $dt_date_global = null;

    /**
     * End date and time of the session in MySQL format in local timezone.
     *
     * @var string|null
     */
    public ?string $dtl_end = null;

    /**
     * End date and time of the session in MySQL format in GMT.
     *
     * @var string|null
     */
    public ?string $dtu_end = null;

    /**
     * Date and time in UTC when the visit is promoted from wait list to active list.
     * Not empty for appointments.
     *
     * @var string|null
     */
    public ?string $dtu_wait_promote = null;

    /**
     * Whether notes added to visit.
     *
     * @var bool|null
     */
    public ?bool $has_note = null;

    /**
     * Duration of the session in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Type of note. One of {@link \WlSdk\Wl\Visit\Note\Sid\NoteSid} constants. `false` if notes not allowed.
     *
     * @var int|null
     */
    public ?int $id_note = null;

    /**
     * Service type, one of {@link \WlSdk\RsServiceSid}.
     *
     * @var int|null
     */
    public ?int $id_service = null;

    /**
     * Whether this service be carried out in Zoom.
     * `true` - If the service can be carried out in Zoom.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_start_virtual_service = null;

    /**
     * Class identifier. Not empty if service is class or event reservation.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Location identifier.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Resource identifier. Not empty if service is asset reservation.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Service identifier. Not empty if service is appointment reservation.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Location name.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Time when service starts in format `8:00AM`.
     *
     * @var string|null
     */
    public ?string $text_time_end = null;

    /**
     * Start time of the session in format '9:30AM'.
     *
     * @var string|null
     */
    public ?string $text_time_start = null;

    /**
     * Title of the appointment.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * URL that leads directly to the class/event booking page in the Client Web App.
     * Empty string if the service is an appointment reservation.
     *
     * @var string|null
     */
    public ?string $url_booking = null;

    public function __construct(array $data)
    {
        $this->a_appointment_visit_info = isset($data['a_appointment_visit_info']) ? new AttendanceInfoByTokenGetResponseAppointmentVisitInfo((array)$data['a_appointment_visit_info']) : null;
        $this->a_logo = isset($data['a_logo']) ? new AttendanceInfoByTokenGetResponseLogo((array)$data['a_logo']) : null;
        $this->a_purchase_option_default = isset($data['a_purchase_option_default']) ? new AttendanceInfoByTokenGetResponsePurchaseOptionDefault((array)$data['a_purchase_option_default']) : null;
        $this->a_resource = isset($data['a_resource']) ? (array)$data['a_resource'] : null;
        $this->a_resource_layout = isset($data['a_resource_layout']) ? array_map(static fn($item) => new AttendanceInfoByTokenGetResponseResourceLayout((array)$item), (array)$data['a_resource_layout']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn($item) => new AttendanceInfoByTokenGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->dt_confirm = isset($data['dt_confirm']) ? (string)$data['dt_confirm'] : null;
        $this->dt_date_global = isset($data['dt_date_global']) ? (string)$data['dt_date_global'] : null;
        $this->dtl_end = isset($data['dtl_end']) ? (string)$data['dtl_end'] : null;
        $this->dtu_end = isset($data['dtu_end']) ? (string)$data['dtu_end'] : null;
        $this->dtu_wait_promote = isset($data['dtu_wait_promote']) ? (string)$data['dtu_wait_promote'] : null;
        $this->has_note = isset($data['has_note']) ? (bool)$data['has_note'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->id_note = isset($data['id_note']) ? (int)$data['id_note'] : null;
        $this->id_service = isset($data['id_service']) ? (int)$data['id_service'] : null;
        $this->is_start_virtual_service = isset($data['is_start_virtual_service']) ? (bool)$data['is_start_virtual_service'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_time_end = isset($data['text_time_end']) ? (string)$data['text_time_end'] : null;
        $this->text_time_start = isset($data['text_time_start']) ? (string)$data['text_time_start'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_booking = isset($data['url_booking']) ? (string)$data['url_booking'] : null;
    }
}
