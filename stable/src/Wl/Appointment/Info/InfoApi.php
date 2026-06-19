<?php
namespace WlSdk\Wl\Appointment\Info;

use WlSdk\WlSdkClient;

/**
 * Gets information about appointment.
 */
class InfoApi
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
     * Class identifier to get information for.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about appointment.
     *
     * Returns detailed information about the specified appointment, including service details, staff member,
     *  date and time in the location's timezone, booking status, client information, and any associated
     *  assets or add-ons. Access is validated against the current user's permissions.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_next: No description.
     *   - array[] a_previous: No description.
     *   - array[] a_question: No description.
     *   - array[] a_resource: No description.
     *   - array[] a_shop_product_option: No description.
     *   - string dt_date_local: Date/time of appointment in location timezone.
     *   - int i_duration: Appointment duration (in minutes).
     *   - int i_index: Index of booked asset.
     *   - int id_appointment_pay: Status of appointment payment. One of [RsAppointmentPaySid](#/components/schemas/RsAppointmentPaySid) constants.
     *   - string k_location: Location key.
     *   - string k_login_promotion: Purchased promotion which provides this appointment.
     *   - string k_resource: Asset key.
     *   - string k_resource_type: Asset category key.
     *   - string k_service: Service key.
     *   - string k_service_category: Service category key.
     *   - string k_session_pass: Purchased drop-in which provides this appointment.
     *   - string k_staff: Staff member who conducts this appointment.

Deprecated: returned only for a limited list of third-party apps to keep backward compatibility.
Use `uid_staff` instead.
     *   - string text_title: Title of the appointment.
     *   - string uid_appointment: User for whom this appointment was booked.
     *   - string uid_staff: Staff member who conducts this appointment.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Info/Info.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_appointment' => $this->k_appointment,
            ],
            static fn($v) => $v !== null
        );
    }
}
