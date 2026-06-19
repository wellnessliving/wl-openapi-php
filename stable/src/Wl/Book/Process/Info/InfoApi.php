<?php
namespace WlSdk\Wl\Book\Process\Info;

use WlSdk\WlSdkClient;

/**
 * Returns class session details and booking information for the "Class and Location" step of the booking wizard.
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
     * Date/time to which session is booked.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * The mode type. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * `true` if action is performed as a staff member; `false` otherwise.

If `true` is sent, access to the business and to the client will be checked.
If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag is set to `false`.

Use this field with caution.
The final booking will not use this flag, and the check will still be performed.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * Key of session which is booked.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * `true` if class capacity should be shown,
`false` to use business setting.
     *
     * @var bool|null
     */
    public ?bool $show_class_capacity = null;

    /**
     * `true` to show "book for" option in booking wizard. `false` for default behavior.
     *
     * @var bool|null
     */
    public ?bool $show_relation = null;

    /**
     * The client key for which the booking is being made.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_repeat = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_resource = null;

    /**
     * The selected sessions.

Keys are class period keys. 
Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session_select = null;

    /**
     * Selected sessions on the waiting list without pay.

Keys are class period keys. 
Values are index arrays of dates/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session_wait_list_unpaid = null;

    /**
     * Determines whether the class/event can be booked at this step or not.
This is an external process control flag.
     *
     * @var bool|null
     */
    public ?bool $can_book = null;

    /**
     * Determines if the user has agreed to the liability release.
`true` - if  the user has agreed. Otherwise, this will be.
`false` - if the user hasn't agreed or the agreement isn't required.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * `true` to book unpaid.
`false` otherwise.

Allows booking unpaid when client has a login promotion that can be used to pay for the service.
Allowed in [ModeSid::WIDGET](#/components/schemas/Wl.Mode.ModeSid) mode only.
     *
     * @var bool|null
     */
    public ?bool $is_book_unpaid = null;

    /**
     * `true` if user pressed 'Pay later'.
`false` if user pressed 'Pay now'.
     *
     * @var bool|null
     */
    public ?bool $is_force_pay_later = null;

    /**
     * Login promotion to be used to book a class.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Session pass to be used to book a class.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * User signature.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns class session details and booking information for the "Class and Location" step of the booking wizard.
     *
     * Loads session data, staff, location, contract, capacity, wait-list state, pricing, special instructions, and
     * recurring booking availability for the given class period and date. For events it also returns the list of
     * individually selectable sessions together with their free-session eligibility.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - int[] a_day_available: Week days available for recurring booking. Constants of [ADateWeekSid](#/components/schemas/ADateWeekSid) class.

`null` if recurring booking is not available.
     *   - array[] a_session_all: No description.
     *   - array[] a_session_free: No description.
     *   - array[] a_staff: No description.
     *   - string dl_end: Date when this class session occurrences stop.
     *   - string dt_date_local: The date/time of the session the user is booking in MySQL format in the location's timezone.
     *   - bool hide_price: `true` if price for the individual session should be hidden, if client has applicable pricing option to pay for this
booking.
`false` if price should be shown always.
     *   - string html_contract: The text of the contract to which the user must agree before book this session.
Not empty if business has contract and if user did not agree to this contract.
     *   - string html_duration: Class duration in human-readable format.
     *   - string html_special: The special instructions for the class.
     *   - string html_special_preview: Special instructions preview for class.
     *   - int i_available: Number of available spots.

`null` if this information is not available.
     *   - int i_book: Number of booked spots.

`null` if this information is not available.
     *   - int i_duration: The duration of the session in minutes.
     *   - int i_wait: Total number of clients on the wait list.
     *   - int i_wait_limit: Total capacity the wait list.
`null` if wail list in unlimited.
`0` if wait list is disabled.
     *   - int i_wait_spot: Estimated place of reservation on the waiting list.
     *   - bool is_book_repeat_client: `true` if recurring booking is available, `false` otherwise.
     *   - bool is_book_repeat_no_end_date: `true` if the setting for frequency during class recurring booking will be `never end` by default, `false` otherwise.
     *   - bool is_event_session: Can client chooses several session per booking.
     *   - bool is_location_phone: `true` if need to display location phone number, `false` otherwise.
     *   - bool is_promotion_only: `true` if event can be paid with pricing option only.
`false` if full event purchase or single session purchase are allowed.
     *   - bool is_single_buy: Whether the class can be paid with single session.
     *   - bool is_special_preview: Whether the full text of the special instructions fits within the preview length or not.
     *   - bool is_virtual: `true` if class is virtual, `false` otherwise.
     *   - string k_location: Class period location key.
     *   - string m_price: Price of the session.
     *   - string m_price_total: Whole event cost.
     *   - string m_price_total_early: Event price at an early discount.

An empty string if there is no discount.
     *   - string s_class: The class title.
     *   - string s_location_address: The location address.
     *   - string s_location_title: The location title.
     *   - string s_time: The time when the session takes place in the location's time zone. In format `hh:mm`.
     *   - string text_location_phone: Location phone number.
     *   - string text_room: Room where session takes place.
     *   - string text_staff: Text representation of the list of staffs.
List of staff see `a_staff`.
     *   - string text_timezone: Timezone abbreviation.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Info/Info.json', $this->params(), 'GET');
    }

    /**
     * Processes the "Class and Location" step of the booking wizard, optionally recording the waiver agreement and booking the session.
     *
     * Accepts the selected sessions, asset assignments, recurring configuration, and waiver signature, then
     * attempts
     * to book the session immediately when no further payment or resource steps are needed. Returns booking keys,
     * activity keys, and flags indicating whether additional wizard steps are required.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - string[] a_login_activity: The keys of users' activity.
     *   - string[] a_visit: The keys of the bookings made.
     *   - array[] a_visit_payment: No description.
     *   - bool is_card_authorize: If client must authorize credit card.
     *   - bool is_force_book: Can the class/event be booked immediately or not.

The verification is based on the search for client's promotions and other features of the class/event.
But it does not take into account the presence of other mandatory steps.
Their presence will be indicated by the `is_next` flag.
     *   - bool is_next: `true` - next steps of the wizard are needed (for example, to purchase something to book the selected session).
`false` - no need for next steps (all that's needed has already been purchased).
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Book/Process/Info/Info.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'show_class_capacity' => $this->show_class_capacity,
            'show_relation' => $this->show_relation,
            'uid' => $this->uid,
            'a_repeat' => $this->a_repeat,
            'a_resource' => $this->a_resource,
            'a_session_select' => $this->a_session_select,
            'a_session_wait_list_unpaid' => $this->a_session_wait_list_unpaid,
            'can_book' => $this->can_book,
            'is_agree' => $this->is_agree,
            'is_book_unpaid' => $this->is_book_unpaid,
            'is_force_pay_later' => $this->is_force_pay_later,
            'k_login_promotion' => $this->k_login_promotion,
            'k_session_pass' => $this->k_session_pass,
            's_signature' => $this->s_signature,
            ],
            static fn($v) => $v !== null
        );
    }
}
