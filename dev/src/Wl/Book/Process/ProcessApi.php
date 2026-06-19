<?php
namespace WlSdk\Wl\Book\Process;

use WlSdk\WlSdkClient;

/**
 * Returns the ordered list of booking wizard steps for the given session and client.
 */
class ProcessApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the ordered list of booking wizard steps for the given session and client.
     *
     * Evaluates the session, user profile, payment requirements, asset selection, and subscription state to build
     * an ordered list of steps the client must complete to finish the booking. The first step in the list is
     * marked
     * as current, and additional flags about event type, wait-list availability, and payment options are returned.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - int[] a_family_relation_login_allow: Relationships who clients are allowed to book for.
One of the [RsFamilyRelationSid](#/components/schemas/RsFamilyRelationSid) constants.

This will be `null` if clients aren't allowed to book for their relationships.
     *   - array[] a_path: No description.
     *   - int id_pay_require: The purchase rule ID.
One of the [RequirePaySid](#/components/schemas/Wl.Classes.RequirePaySid) constants.
     *   - bool is_age_require: `true` if this class has age restriction and requires user to specify age. `false` otherwise.
     *   - bool is_card_authorize: Determines if the client must authorize the credit card.
     *   - bool is_event: If `true`, the session being booked is an event. Otherwise, this will be `false`.
     *   - bool is_family_relation_book: Determines whether clients are allowed to book for their relationships without switching profiles.
     *   - bool is_free: Determines whether the class/event is free (price).
     *   - bool is_have_ach: `true` if the client has an ach account, `false` otherwise.
     *   - bool is_have_credit_card: If `true`, the client has a credit card. Otherwise, this will be `false`.
     *   - bool is_session: `true` - the client can select several sessions per booking.

`false` - the client can't select several sessions.
     *   - bool is_wait: If `true`, the user can be placed on a wait list. Otherwise, this will be `false`.
     *   - bool is_wait_list_unpaid: If `true`, the user can be placed on a wait list without payment, `false` otherwise.
     *   - string k_location: The key of the location where the session is booked.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Process.json', $this->params(), 'GET');
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
            'show_relation' => $this->show_relation,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
