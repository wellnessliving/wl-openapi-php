<?php
namespace WlSdk\Wl\Visit;

use WlSdk\WlSdkClient;

/**
 * Gets visit status.
 */
class VisitStatusApi
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
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The time zone key.

`null` if not set then use default timezone client.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The staff decision to charge (or not charge) a penalty when a client meets late cancel/no-show requirements.

If `true`, a late cancel fee should be charged. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_charge_fee = null;

    /**
     * The email pattern key.
If `null`, the live email pattern shouldn't be used.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    /**
     * The reason the visit was canceled.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    /**
     * The source of the visit or the visit change.
One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
If you're unsure about the value to use, keep the default value.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The status of the visit.
One of the [VisitSid](#/components/schemas/Wl.Visit.VisitSid) constants.
     *
     * @var int|null
     */
    public ?int $id_visit = null;

    /**
     * The status of the visit from which the transition is made. One of the [VisitSid](#/components/schemas/Wl.Visit.VisitSid) constants.

If the visit status is passed, it will be used to check with the actual status in the database.
If `null`, the visit hasn't yet passed.

If the status of this parameter is out of date, the API call will refresh it.
     *
     * @var int|null
     */
    public ?int $id_visit_from = null;

    /**
     * Whether to send email notification.

`true` - email notification will be sent.
`false` - email notification will not be sent.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether to send push notification.

`true` - push notification will be sent.
`false` - push notification will not be sent.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Whether to send sms notification.

`true` - sms notification will be sent.
`false` - sms notification will not be sent.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets visit status.
     *
     * Returns full details for the specified visit, including date, duration, staff, location,
     * virtual service join URL, assigned resources, downloadable calendar data, and whether
     * the visit can still be cancelled. Handles class, appointment, and gym visit types. Used
     * to render the visit detail view and action buttons in the client portal.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_cancel: No description.
     *   - string[] a_resource: An array of service resources.

The key refers to the `k_resource_type`. 
The value is an array with the following key: `k_resource`. .
The array element contains a nested array with `i_index` and `i_quantity`. .

This will be empty if not set yet.
     *   - array[] a_resource_alias: No description.
     *   - string[] a_staff: The list of keys of staff members that conduct the class.
     *   - string[] a_uid_staff: The list of user IDs of staff members that conduct the class.
     *   - string dt_date: The visit date and time in UTC and in MySQL format.
     *   - string dtl_date: The visit date in the location's time zone and in MySQL format.
     *   - int i_duration: The service duration (in minutes).
     *   - int i_wait_spot: The client's place in a waiting list.
     *   - int id_mode: The source of the visit or the visit change.
One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
If you're unsure about the value to use, keep the default value.
     *   - int id_visit: The status of the visit.
One of the [VisitSid](#/components/schemas/Wl.Visit.VisitSid) constants.
     *   - bool is_event: Determines whether the visit is from an event.
     *   - bool is_request: Whether this visit is requested and requires staff confirmation.

* `true` - visit is requested.
* `false` - visit is confirmed or denied or this is a system request.
     *   - string k_class: The class key.
     *   - string k_class_period: The class period key.
     *   - string k_location: The key of the location where visit provides.
     *   - string k_service: The service key.
If 'null', the visit isn't from an appointment.
     *   - string k_staff: The key of the staff providing the appointment.
If `null`, the visit isn't from an appointment (for example, the visit is from an asset).
     *   - string s_calendar_file_content: The .ics file for adding the service to a phone calendar.
     *   - string text_abbr_timezone: The text abbreviation of the time zone.
     *   - string text_location: The full address of the location for the visit (not the name of the location).
     *   - string text_staff: The full name of the staff member who conducts this visit.
If there are several staff members conducting the visit, their names will all be listed and separated by commas.
     *   - string text_title: The service title.
     *   - string uid: User key who made a visit.
`null` for a guest visit.
     *   - string uid_staff: The ID of the user who is the staff providing the appointment.
If `null`, the visit isn't from an appointment (for example, the visit is from an asset).
     *   - string url_book_referral: The direct link to start class/event booking on the WellnessLiving website.
`null` for appointments/events/gym visits.
     *   - string url_book_referral_short: The shortened direct link to start class/event booking on the WellnessLiving website.
`null` for appointments/events/gym visits.
     *   - string url_virtual_service: URL of virtual service. Empty if the visit is not virtual.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Visit/VisitStatus.json', $this->params(), 'GET');
    }

    /**
     * Changes visit status.
     *
     * Applies a status transition to the specified visit (for example, check-in, no-show, or
     * cancellation). Supports optimistic concurrency via an expected-from status, optional
     * late-cancel fee charging, and client notification flags. Requires backend access or
     * appropriate staff privileges.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Visit/VisitStatus.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_timezone' => $this->k_timezone,
            'k_visit' => $this->k_visit,
            'is_charge_fee' => $this->is_charge_fee,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            'text_reason' => $this->text_reason,
            'id_mode' => $this->id_mode,
            'id_visit' => $this->id_visit,
            'id_visit_from' => $this->id_visit_from,
            'is_mail' => $this->is_mail,
            'is_push' => $this->is_push,
            'is_sms' => $this->is_sms,
            ],
            static fn($v) => $v !== null
        );
    }
}
