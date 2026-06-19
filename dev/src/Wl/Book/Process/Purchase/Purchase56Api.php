<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns available purchase options for the specified session, decoding JSON-encoded group promotion and session
 * inputs.
 */
class Purchase56Api
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
     * A list of existing purchase options that were selected for previous clients (group).

Note:
* It makes sense if for all clients the list is loaded within
     the same pair [PurchaseApi](/Wl/Book/Process/Purchase/Purchase.json) and [PurchaseApi](/Wl/Book/Process/Purchase/Purchase.json).
* If promotions are shared, the system will try to determine if there are enough sessions left for the next
     client who has the same promotion.
* A very simple check is carried out based on a comparison of the remaining sessions for the promotion
     with the number of times it was selected.
* Can affect the list of available login promotions [PurchaseApi](/Wl/Book/Process/Purchase/Purchase.json).
     If a given client is eligible for such a promotion, but the remaining sessions (minus those previously
     selected) in it do not allow it to be applied to the selected session, then such promotion will simply
     not be returned for the client.
* The order of clients across all APIs must be the same to guarantee their results.

Each element has the following structure:
     *
     * @var array[]|null
     */
    public ?array $a_login_promotion_group = null;

    /**
     * The list of sessions being booked.

Keys are class period keys. 
Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session = null;

    /**
     * The selected sessions on the wait list that are unpaid.

Keys are class period keys. 
Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session_wait_list_unpaid = null;

    /**
     * Date/time to which session is booked.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * The image height in pixels. Specify this value if you need image to be returned in specific size.
The returned image will have the default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_image_height = null;

    /**
     * The image width in pixels. Specify this value if you need image to be returned in specific size.
The returned image will have the default thumbnail size if this value isn't specified.
     *
     * @var int|null
     */
    public ?int $i_image_width = null;

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
     * Determines if the client must authorize the credit card.
     *
     * @var bool|null
     */
    public ?bool $is_card_authorize = null;

    /**
     * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag is set to `false`.

Use this field with caution.
The final booking will not use this flag, and the check will still be performed.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * A list of existing purchase options that were selected for previous clients (group).

Note:
* It makes sense if for all clients the list is loaded within
     the same pair `dt_date_gmt` and `k_class_period`.
* If promotions are shared, the system will try to determine if there are enough sessions left for the next
     client who has the same promotion.
* A very simple check is made based on a comparison of the remaining sessions for the promotion
     with the number of times it was selected.
* Can affect the list of available login promotions `a_login_promotion`.
     If a given client is eligible for such a promotion, but the remaining sessions (minus those previously
     selected) in it do not allow it to be applied to the selected session, then such promotion will simply
     not be returned for the client.
* The order of clients across all APIs must be the same to guarantee their results.

Serialized with JSON.

Each element has the following structure:
     *
     * @var string|null
     */
    public ?string $json_login_promotion_group = null;

    /**
     * The selected sessions.
This won't be empty for session mode only.

Fields refer to IDs of sessions in the database.
Values refer to arrays of dates/times when session occurred, returned in MySQL format and in UTC.

Serialized with JSON.
     *
     * @var string|null
     */
    public ?string $json_session = null;

    /**
     * The business key.

`null` if business key was not passed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * Returns available purchase options for the specified session, decoding JSON-encoded group promotion and session inputs.
     *
     * Deserializes the JSON-encoded group login-promotion list and session selection, then delegates to the parent
     * to return the purchase options available for the current client and session.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_login_prize: No description.
     *   - array[] a_login_promotion: No description.
     *   - array[] a_purchase: No description.
     *   - array[] a_reward_prize: No description.
     *   - array[] a_session_pass: No description.
     *   - bool is_single_default: Indicates if the drop-in rate should be the default promotion.
     *   - string k_promotion_default: The default Purchase Option key.
This will be empty if the class has no default Purchase Option.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Purchase/Purchase56.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_login_promotion_group' => $this->a_login_promotion_group,
            'a_session' => $this->a_session,
            'a_session_wait_list_unpaid' => $this->a_session_wait_list_unpaid,
            'dt_date_gmt' => $this->dt_date_gmt,
            'i_image_height' => $this->i_image_height,
            'i_image_width' => $this->i_image_width,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_card_authorize' => $this->is_card_authorize,
            'is_credit_card_check' => $this->is_credit_card_check,
            'json_login_promotion_group' => $this->json_login_promotion_group,
            'json_session' => $this->json_session,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'show_relation' => $this->show_relation,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
