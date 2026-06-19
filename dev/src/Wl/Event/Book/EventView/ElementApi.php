<?php
namespace WlSdk\Wl\Event\Book\EventView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about event item.
 */
class ElementApi
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
     * The last available date for booking.
If this is set and `dl_book_available_start` is a set list of
  sessions available for booking, `a_book_available`
  should match given date range.
     *
     * @var string|null
     */
    public ?string $dl_book_available_end = null;

    /**
     * The first available date for booking.
If this is set and `dl_book_available_end` is a set list of
  sessions available for booking `a_book_available`
  should match given date range.
     *
     * @var string|null
     */
    public ?string $dl_book_available_start = null;

    /**
     * Datetime of the session.
Is not `null` only if we need to get information for an event with a specific class period and datetime.
If this is `null`, then the `k_class_period` should be `null` too.
     *
     * @var string|null
     */
    public ?string $dtu_session = null;

    /**
     * Image height in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified, the returned image will have the default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * Image width in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified, the returned image will have the default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

    /**
     * Staff image height in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified, the returned image will have the default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_staff_image_height = null;

    /**
     * Staff image width in pixels. Please specify this value if you need image to be returned in specific size.
In case this value is not specified, the returned image will have the default thumbnail size.
     *
     * @var int|null
     */
    public ?int $i_staff_image_width = null;

    /**
     * `true` if schedule should be grouped by location time and staff,
`false` if all schedule elements should be independent.
     *
     * @var bool|null
     */
    public ?bool $is_schedule_group = null;

    /**
     * Key of a business to which the requested event(s) belong.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of a class period to show information for.

Is not `null` only if we need to get information for an event with a specific class period and datetime.
If this is `null`, then the `dtu_session` should be `null` too.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The event key.
You can specify `s_event` instead to get information for a large number of events.
     *
     * @var string|null
     */
    public ?string $k_event = null;

    /**
     * A list of event keys serialized with JSON.
Specify instead of `k_event` to get information for a large number of events.
     *
     * @var string|null
     */
    public ?string $s_event = null;

    /**
     * `true` to show schedule, which is not published yet.
`false` to show only published schedule.
     *
     * @var bool|null
     */
    public ?bool $show_unpublished = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about event item.
     *
     * Used to render the event detail page or event card in the booking flow. Returns everything needed
     * to display the event to a prospective client: schedule, pricing, booking availability, assigned staff
     * with photos, and available installment payment options.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_age_restrictions: No description.
     *   - array[] a_book_available: No description.
     *   - array[] a_business_policy: No description.
     *   - array[] a_class_logo: No description.
     *   - string[] a_class_tab: The list of keys from class tab.
     *   - array[] a_event: No description.
     *   - array[] a_installment_template: No description.
     *   - array[] a_schedule: No description.
     *   - string[] a_shop_category: IDs of online store category.
     *   - array[] a_staff_logo: No description.
     *   - array[] a_timezone_info: No description.
     *   - array[] a_visits_required: No description.
     *   - string dt_book_date: That date that should be used to go to the booking wizard.
     *   - string dt_early: The early registration date of the event.
     *   - string dt_end: The end date of the event.
     *   - string dt_start: The start date of the event.
     *   - bool hide_application: Whether event will be hidden in the White Label mobile application.
`true` means that event will not be displayed, `false` otherwise.
     *   - string html_description: The description of the event.
     *   - string html_special: Special instruction for the event.
     *   - int i_capacity: Class capacity.

`null` if no set.
     *   - int i_session: The session count.
     *   - int i_session_remain: The remaining session count.
     *   - int id_pay_require: The purchase rule ID.
One of the [RequirePaySid](#/components/schemas/Wl.Classes.RequirePaySid) constants.
     *   - int id_pay_require_option: Default required value for [RequirePaySid::ADVANCE](#/components/schemas/Wl.Classes.RequirePaySid) payment mode,
 one of [RequirePaySid::ONLINE](#/components/schemas/Wl.Classes.RequirePaySid) or [RequirePaySid::VISIT](#/components/schemas/Wl.Classes.RequirePaySid).

`null` means default value not selected.
     *   - int id_virtual_provider: The virtual provider ID. One of the [VirtualProviderSid](#/components/schemas/Wl.Virtual.VirtualProviderSid) constants.

`null` if an in-person event.
     *   - bool is_age_restrict: Whether the event is age restricted.
`true` if the event is age restricted, `false` if the event is not.
     *   - bool is_availability_checked: `true` if the event availability was checked; `false` if the event has too many sessions, and calculating
 the availability of each one takes a lot of time.
     *   - bool is_book: `true` if the event is already booked; `false` if the event isn't booked.
     *   - bool is_bookable: `true` If the event is bookable; `false` if the event isn't bookable.
     *   - bool is_full: `true` if there are no free spots in the event; booking is available only into the wait list.
`false` otherwise.
     *   - bool is_makeup: `true` if the selected session can be a make up session.
`false` otherwise.
     *   - bool is_past: `true` if the selected session has already started and do not available to book.
`false` otherwise.
     *   - bool is_policy_custom: `true` if the `a_business_policy` contains the custom policies from the event.
`false` otherwise.
     *   - bool is_promotion_only: `true` if the event can be paid with a Purchase Option only.
`false` if full event purchases or single session purchases are permitted.
     *   - bool is_prorate: `true` if clients, when they book event, which has been started, can pay only for the sessions in the future.
`false` if clients, when they book event, have to pay for the entire event and the number of lefts in the future sessions
does not matter.
     *   - bool is_single_session_buy: Determines whether this event allows paying for a single session.
     *   - bool is_virtual: `true` if event is virtual; `false` otherwise.
     *   - string k_book_class_period: The ID of the session which should be used to go to the booking wizard.
     *   - string m_price: The price of a single session of the event.
     *   - string m_price_total: The price of the all sessions of the event.
     *   - string m_price_total_early: Price of the full event should be used as full price while `dt_early` is actual.
     *   - string s_deny_reason: The reason why the event can't be booked.
Empty if `k_book_class_period` isn't empty.
     *   - string s_title: The title of the event.
     *   - bool show_special_instructions: `true` if special instructions can be public,
`false` if they should be shown only to the clients, who booked the class.
     *   - string text_end: End date of the event in user-friendly format.
     *   - string text_start: Start date of the event in user-friendly format.
     *   - string url_book: Link to the start of the booking wizard to book the closed session from this event or the entire event.

Can be `null` if there is no available for booking sessions.
     *   - string xml_description: The description of the event.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Event/Book/EventView/Element.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dl_book_available_end' => $this->dl_book_available_end,
            'dl_book_available_start' => $this->dl_book_available_start,
            'dtu_session' => $this->dtu_session,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'i_staff_image_height' => $this->i_staff_image_height,
            'i_staff_image_width' => $this->i_staff_image_width,
            'is_schedule_group' => $this->is_schedule_group,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'k_event' => $this->k_event,
            's_event' => $this->s_event,
            'show_unpublished' => $this->show_unpublished,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
