<?php
namespace WlSdk\Wl\Login\Attendance;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about a single class period, appointment, or asset session.
 */
class AttendanceInfoApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns detailed information about a single class period, appointment, or asset session.
     *
     * Accepts either a class period key with a local date or an appointment key, validates access, and returns
     * scheduling details including title, start and end times, location, staff, assets, service type, and
     * default purchase option information.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_appointment_visit_info: No description.
     *   - array[] a_logo: No description.
     *   - array[] a_purchase_option_default: No description.
     *   - string[] a_resource: Assets which are bound to this session.
     *   - array[] a_resource_layout: No description.
     *   - array[] a_staff: No description.
     *   - string dt_confirm: Confirmation date+time of appointment in MySQL format. If client never confirmed, will be zero date + time.
     *   - string dt_date_global: Start date of the session in MySQL format in GMT.
     *   - string dtl_end: End date and time of the session in MySQL format in local timezone.
     *   - string dtu_end: End date and time of the session in MySQL format in GMT.
     *   - string dtu_wait_promote: Date and time in UTC when the visit is promoted from wait list to active list.
Not empty for appointments.
     *   - bool has_note: Whether notes added to visit.
     *   - int i_duration: Duration of the session in minutes.
     *   - int id_note: Type of note. One of [NoteSid](#/components/schemas/Wl.Visit.Note.Sid.NoteSid) constants. `false` if notes not allowed.
     *   - int id_service: Service type, one of [RsServiceSid](#/components/schemas/RsServiceSid).
     *   - bool is_start_virtual_service: Whether this service be carried out in Zoom.
`true` - If the service can be carried out in Zoom.
`false` - otherwise.
     *   - string k_class: Class identifier. Not empty if service is class or event reservation.
     *   - string k_location: Location identifier.
     *   - string k_resource: Resource identifier. Not empty if service is asset reservation.
     *   - string k_service: Service identifier. Not empty if service is appointment reservation.
     *   - string text_location: Location name.
     *   - string text_time_end: Time when service starts in format `8:00AM`.
     *   - string text_time_start: Start time of the session in format '9:30AM'.
     *   - string text_title: Title of the appointment.
     *   - string url_booking: URL that leads directly to the class/event booking page in the Client Web App.
Empty string if the service is an appointment reservation.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Attendance/AttendanceInfo.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dt_date_local' => $this->dt_date_local,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            ],
            static fn($v) => $v !== null
        );
    }
}
