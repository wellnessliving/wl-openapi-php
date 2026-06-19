<?php
namespace WlSdk\Wl\Book\Process;

use WlSdk\WlSdkClient;

/**
 * Processes the group booking: validates input, collects payment, books sessions, and sends confirmation emails.
 */
class ProcessGroupApi
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
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_client = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * `true` if user pressed 'Pay later'.
`false` if user pressed 'Pay now'.
     *
     * @var bool|null
     */
    public ?bool $is_force_pay_later = null;

    /**
     * The installment template primary key.
`null` to not use installment template.
     *
     * @var string|null
     */
    public ?string $k_pay_installment_template = null;

    /**
     * The discount code to be applied to the purchase.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Processes the group booking: validates input, collects payment, books sessions, and sends confirmation emails.
     *
     * Accepts a list of clients with their purchase items, resources, sessions, and quiz responses, then validates
     * capacity and eligibility, processes payment for all clients at once, creates booking records, and dispatches
     * confirmation emails. Returns visit keys, activity keys, and purchase activity key upon success.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_book_error: No description.
     *   - string[] a_login_activity_book: Primary keys of users' activity that correspond to bookings made.
     *   - string[] a_visit: Primary keys of bookings made.
     *   - string k_login_activity_purchase: The key of the user's activity corresponding to the purchase made.
`null` if no purchase was made.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Book/Process/ProcessGroup.json', $this->params(), 'POST');
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
            'a_client' => $this->a_client,
            'a_pay_form' => $this->a_pay_form,
            'is_force_pay_later' => $this->is_force_pay_later,
            'k_pay_installment_template' => $this->k_pay_installment_template,
            'text_discount_code' => $this->text_discount_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
