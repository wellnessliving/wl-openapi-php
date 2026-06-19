<?php
namespace WlSdk\Wl\Book\Process\Resource;

use WlSdk\WlSdkClient;

/**
 * Returns the list of available assets for the booking session, grouped by asset category.
 */
class ResourceApi
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
     * The selected sessions.
Only makes sense for session events.
Optional parameter for GET request: if not passed, all available sessions will be used.

Keys are class period keys. 
Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session = null;

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
    public ?array $a_resource_select = null;

    /**
     * The selected sessions on the wait list that are unpaid.

Keys are class period keys. 
Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of available assets for the booking session, grouped by asset category.
     *
     * Loads all asset categories and their items available for the given class period or selected sessions,
     * strips shared resources that clients should not choose individually, attaches image data and occupancy
     * information, and returns the result as `a_resource_all`.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - array[] a_resource_all: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Resource/Resource.json', $this->params(), 'GET');
    }

    /**
     * Saves the asset selection for the booking and attempts to book the session if no further steps are required.
     *
     * Validates and stores the selected assets and session data in the booking process context, then, when no quiz
     * step is needed and payment is not required, attempts to complete the booking immediately. Returns visit
     * keys,
     * activity keys, and a flag indicating whether further wizard steps are needed.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - string[] a_login_activity: The keys of a user's activity.
This won't be empty only if the session(s) was booked at this step.
     *   - string[] a_visit: The keys of the bookings that have been made.
Not empty only if session(s) was booked on this step.
     *   - bool is_next: `true` - the next steps of the booking wizard are required (for example, to purchase something to book the selected session).
`false` - no further booking steps are required.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Book/Process/Resource/Resource.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_session' => $this->a_session,
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'show_relation' => $this->show_relation,
            'uid' => $this->uid,
            'a_repeat' => $this->a_repeat,
            'a_resource_select' => $this->a_resource_select,
            'a_session_wait_list_unpaid' => $this->a_session_wait_list_unpaid,
            'can_book' => $this->can_book,
            'is_book_unpaid' => $this->is_book_unpaid,
            'is_force_pay_later' => $this->is_force_pay_later,
            'k_login_promotion' => $this->k_login_promotion,
            'k_session_pass' => $this->k_session_pass,
            ],
            static fn($v) => $v !== null
        );
    }
}
