<?php
namespace WlSdk\Wl\Login\Attendance;

use WlSdk\WlSdkClient;

/**
 * Returns the attendance list for a class period or appointment session.
 */
class AttendanceListApi
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
     * The local date of the class or event session.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * If `true`, then return the purchase used to pay for session.
Otherwise, do not return any purchase information.
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the attendance list for a class period or appointment session.
     *
     * Accepts either a class period key with a local date or an appointment key, validates access and date, and
     * returns
     * the active list, wait list, and confirmed list of attending clients, along with session capacity, wait list
     * limit,
     * and per-client details such as purchase option, visit status, wearables, and quiz responses.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_list_active: No description.
     *   - array[] a_list_confirm: No description.
     *   - array[] a_list_wait: No description.
     *   - int i_capacity: The maximum capacity of the class or event session.
     *   - int i_client: Count client on the attendance.
     *   - int i_wait_list_limit: The maximum number of clients on wait list of the class or event session.
`0` for appointments, use [AppointmentWaitListApi](/Wl/Appointment/WaitList/AppointmentWaitList.json) instead.
     *   - bool is_wait_list_limit: `true` to use class/event specific wait list limit, `false` to use the limit from default policies.
`false` for appointments. Use [AppointmentWaitListApi](/Wl/Appointment/WaitList/AppointmentWaitList.json) instead.
     *   - string k_location: The Location key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Attendance/AttendanceList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
