<?php
namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Returns the schedule and HTML for the Self Check-In Web App for the given user.
 */
class ReceptionScheduleApi
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
     * The business key, where the Self Check-In Web App is started.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key, where the Self Check-In Web App is started.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the Self Check-In Web App.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * The key of the user to show the schedule for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The date and time of the visit in UTC and MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The key of the appointment to check in.

If `null`, this is class visit or gym visit.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The key of the class schedule to check in.

If `null`, this is an appointment visit or gym visit.
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
     * Returns the schedule and HTML for the Self Check-In Web App for the given user.
     *
     * Returns the rendered schedule HTML, a structured list of upcoming sessions, and a map of service type
     * HTML classes for the authenticated user at the given location.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_class: No description.
     *   - int[] a_schedule_class_all: All types of services that appear in the schedule.
Keys are constants from [ServiceSid](#/components/schemas/Wl.Service.ServiceSid). Values are the HTML classes associated with that service.
     *   - string html_schedule: The schedule to be shown in the Self Check-In Web App for the selected user.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reception/Application/ReceptionSchedule.json', $this->params(), 'GET');
    }

    /**
     * Performs check-in for the given user and returns the confirmation HTML and data.
     *
     * Books or checks the user into the specified class period or appointment, then returns confirmation HTML
     * and structured data including payment info, assigned assets, and visit counts.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_confirmation_data: No description.
     *   - string html_confirmation: The confirmation template to be shown in the Self Check-In Web App for the selected user.
     *   - string k_visit: The visit key, which was added or checked in.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Reception/Application/ReceptionSchedule.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_secret' => $this->s_secret,
            'uid' => $this->uid,
            'dtu_date' => $this->dtu_date,
            'k_appointment' => $this->k_appointment,
            'k_class_period' => $this->k_class_period,
            ],
            static fn($v) => $v !== null
        );
    }
}
