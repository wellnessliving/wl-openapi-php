<?php
namespace WlSdk\Wl\Book\Process\Quiz;

use WlSdk\WlSdkClient;

/**
 * Defines list of required quizzes.
 */
class QuizApi
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
     * The list of purchase items. Each element has the format `[id_purchase_item]::[k_id]`, where: 

This will be empty if no purchases are made for the booking.
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item = null;

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
     * The list of quiz response keys.

Keys are quiz keys. 
Values are response keys. 
Or the `skip` to skip the quiz.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response = null;

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
     * Defines list of required quizzes.
     *
     * Merges the quizzes required by the booking itself with quizzes tied to the selected purchase options,
     * filters out internal (staff-only) quizzes for non-backend requests, and returns the unified list in
     * `a_quiz`.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_quiz: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Book/Process/Quiz/Quiz.json', $this->params(), 'GET');
    }

    /**
     * Finished booking process and save quiz responses (if quiz step is the last in booking wizard).
     *
     * Validates session selection and asset requirements, stores quiz responses in the booking process context,
     * and attempts to complete the booking without payment when no payment step is needed. Returns visit keys,
     * activity keys, and a flag indicating whether additional wizard steps are still required.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_login_activity: The user's activity keys.
     *   - string[] a_visit: The keys the bookings that have been made.
     *   - bool is_next: If `true`, the next steps of the booking wizard are required for the purchase or booking. Otherwise, this will be `false`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Book/Process/Quiz/Quiz.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_purchase_item' => $this->a_purchase_item,
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'show_relation' => $this->show_relation,
            'uid' => $this->uid,
            'a_quiz_response' => $this->a_quiz_response,
            'a_repeat' => $this->a_repeat,
            'a_resource' => $this->a_resource,
            'a_session_select' => $this->a_session_select,
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
