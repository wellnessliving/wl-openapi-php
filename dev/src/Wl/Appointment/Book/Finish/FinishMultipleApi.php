<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Completes the appointment booking for one or more providers, optionally creating a new client.
 */
class FinishMultipleApi
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
     * The payment type for the appointment. One of the [RsAppointmentPaySid](#/components/schemas/RsAppointmentPaySid) constants.

Keys refer to provider indexes.
     *
     * @var int[]|null
     */
    public ?array $a_pay = null;

    /**
     * List of user keys to book appointments.
There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Data to create new users.
Specify this if `$uid` is empty.
The data must contain the next keys:
     *
     * @var array[]|null
     */
    public ?array $a_user = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * The appointment key.
Specify this to reschedule a certain appointment.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user key.

This field is used if the client books for himself or for the relative.

This field is incorrect to use for guest booking since in this case the client will be checked as a relative.

In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * A list of answers for the questions from [QuestionApi](/Wl/Appointment/Book/Question/Question.json).

1st dimension - provider index.
2nd dimension - keys refer to hashes of the questions. Values refer to answers for the questions.
     *
     * @var string[][]|null
     */
    public ?array $a_answer = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_book_data = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_notification = null;

    /**
     * The sum paid.

Keys refer to provider indexes.
     *
     * @var string[]|null
     */
    public ?array $a_paid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_payment_data = null;

    /**
     * The purchase items keys.
This will be empty if no purchases have been made for the appointment booking.

Keys refer to provider indexes.
Value is array of item keys.
     *
     * @var string[][]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * The list of quiz response keys.
Key is quiz key.
Value is quiz response key.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response = null;

    /**
     * The mode type. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * Determines whether multiple appointments have been booked in back-to-back mode.
     *
     * @var bool|null
     */
    public ?bool $is_back_to_back = null;

    /**
     * This will be `true` when trying to make a test booking and rollback should be applied.
Otherwise, this will be `false`.

If the flag is set to `true`, credit card requirement will be ignored during this check.
     *
     * @var bool|null
     */
    public ?bool $is_try = null;

    /**
     * Unique identifier of the wizard.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Completes the appointment booking for one or more providers, optionally creating a new client.
     *
     * Accepts booking details for one or more providers in `a_book_data`,
     *  processes payment using the selected Purchase Option, creates appointment records, and sends
     *  booking confirmation notifications. A new client account can be created by supplying user
     *  details in `a_user` when no UID is provided.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_appointment: No description.
     *   - string[] a_login_activity_visit: The activity IDs of bookings that have been made.
     *   - string[] a_visit: The visit IDs.
     *   - string[][] a_visit_provider: Keys of booked visits.

Structured into a two-dimensional array.
1st dimension - providers; 2nd dimension - visit keys inside a provider.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Finish/FinishMultiple.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_pay' => $this->a_pay,
            'a_uid' => $this->a_uid,
            'a_user' => $this->a_user,
            'is_walk_in' => $this->is_walk_in,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            'a_answer' => $this->a_answer,
            'a_book_data' => $this->a_book_data,
            'a_notification' => $this->a_notification,
            'a_paid' => $this->a_paid,
            'a_pay_form' => $this->a_pay_form,
            'a_payment_data' => $this->a_payment_data,
            'a_purchase_item' => $this->a_purchase_item,
            'a_quiz_response' => $this->a_quiz_response,
            'id_mode' => $this->id_mode,
            'is_back_to_back' => $this->is_back_to_back,
            'is_try' => $this->is_try,
            's_id' => $this->s_id,
            ],
            static fn($v) => $v !== null
        );
    }
}
