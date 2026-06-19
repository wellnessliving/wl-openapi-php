<?php
namespace WlSdk\Wl\Schedule\Page;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about one element of schedule.
 */
class PageElementApi
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
     * Key of the business to which the visit belongs.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about one element of schedule.
     *
     * Returns full details for a single visit, including staff, location, timing, assigned assets,
     * virtual join URL, and class-specific or appointment-specific information. Used to render the
     * visit detail page in the client's schedule view.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_appointment_visit_info: No description.
     *   - array[] a_asset: No description.
     *   - array[] a_class_info: No description.
     *   - array[] a_resource_image: No description.
     *   - array[] a_staff: No description.
     *   - string dt_cancel: The latest date and time for when the visit can be canceled without penalty.
     *   - string dt_date_global: The date and time of the visit in UTC.
     *   - string dt_date_local: The date and time of the visit in the local time zone.
     *   - string dtl_location: Session date/time in timezone of the location where it takes place.
     *   - string html_description: The description of the service.
     *   - string html_special: The special instructions for the service.
     *   - int i_capacity: Capacity of the service.
`null` indicates that the capacity is not set.
     *   - int i_duration: The scheduled duration of the visit.
`0` means that session duration is hidden.
     *   - int i_wait_spot: Estimated place of reservation on the waiting list.
     *   - int id_note: The note type ID. This will be set to `null` if notes aren't allowed.
This is one of the [NoteSid](#/components/schemas/Wl.Visit.Note.Sid.NoteSid) constants.

This will be `null` if notes aren't allowed.
     *   - int id_virtual_provider: The virtual provider ID. One of the [VirtualProviderSid](#/components/schemas/Wl.Virtual.VirtualProviderSid) constants.

This will be `null` for non-virtual services.
     *   - int id_visit: The visit type ID. One of the [VisitSid](#/components/schemas/Wl.Visit.VisitSid) constants.

This will be `null` if not loaded yet.
     *   - bool is_checkin: If `true`, then this visit is ready to be checked in. If `false`, then this visit can't be checked in.
     *   - bool is_enable_client_cancel: This will be `true` if clients can cancel the session. Otherwise, this will be `false`.
     *   - bool is_event: If `true`, then this visit is a part of a larger event. If `false`, then this visit is an individual session.
     *   - bool is_in_progress: `true` - service is in progress; `false` - otherwise.
     *   - bool is_virtual: `true` - service is virtual; `false` - otherwise.
     *   - string k_appointment: The appointment key.
This will be set only if the visit is an appointment.

If the visit is a class or event, this will be `null`.
     *   - string k_class: The class key. This will be set only if the visit is a class or an event.
If the visit is an appointment, this will be `null`.
     *   - string k_class_period: The class period key. This will be set only if the visit is a class or an event.

If the visit is an appointment, this will be `null`.
     *   - string k_location: The location key.
     *   - string k_resource: Resource key.
     *   - string k_service: Session key.
     *   - string s_title: The name of class or service.
     *   - string text_location: Location title.
     *   - string text_room: Room where session takes place.
     *   - string text_timezone: Timezone abbreviation.
     *   - string uid: The user key.
     *   - string url_image: URL of the image representing the service or resource.
     *   - string url_virtual_join: Url to wait page is the beginning of an online service.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Schedule/Page/PageElement.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
