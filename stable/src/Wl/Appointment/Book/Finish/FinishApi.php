<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Loads data to prepare client side to complete booking.
 */
class FinishApi
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
     * List of user keys to book appointments.
There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

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
     * All data from the provider model `Wl_Appointment_Book_ProviderModel`:
     *
     * @var array[]|null
     */
    public ?array $a_book_data = null;

    /**
     * Data to create new user.
Specify this if `uid` is empty.
Must contain the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_user = null;

    /**
     * The payment type ID for the appointment. One of the [RsAppointmentPaySid](#/components/schemas/RsAppointmentPaySid) constants.
     *
     * @var int|null
     */
    public ?int $id_pay = null;

    /**
     * The appointment key.
This should be set if you're rebooking an existing appointment.

Otherwise, use `0` to book a new appointment.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Key of timezone.

`null` if not set then use default timezone client.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * A list of answers for the questions from [QuestionApi](/Wl/Appointment/Book/Question/Question.json).
Keys refer to hashes of the questions. Values refer to answers for the questions.
     *
     * @var string[]|null
     */
    public ?array $a_answer = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_notification = null;

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
     * The purchase item keys.
Empty if no purchases are made for the appointment booking.
     *
     * @var string[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * A list of quiz response keys.
Key is quiz key.
Value is quiz response key.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response = null;

    /**
     * The booking mode ID. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * Determines whether multiple appointments are booked in back-to-back mode.
     *
     * @var bool|null
     */
    public ?bool $is_back_to_back = null;

    /**
     * If `true`, the appointment is booked as unpaid. Otherwise, this will be `false` to select an available Purchase Option.
     *
     * @var bool|null
     */
    public ?bool $is_unpaid_force = null;

    /**
     * The sum paid for a deposit.
     *
     * @var string|null
     */
    public ?string $m_pay = null;

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
     * Loads data to prepare client side to complete booking.
     *
     * Returns notification settings (email, push, SMS) for the appointment creation confirmation
     *  so the client side can display the appropriate notification options before finalizing the booking.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - array[] a_notification: No description.
     *   - string k_location: Location to show available appointment booking schedule.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Finish/Finish.json', $this->params(), 'GET');
    }

    /**
     * Completes the appointment booking and processes payment for the client.
     *
     * Delegates to `post()` to handle a single appointment booking, mapping
     *  the legacy single-provider request fields to the multi-provider format. Creates an appointment
     *  record, applies the selected Purchase Option, and sends the booking confirmation notification.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - array[] a_appointment: No description.
     *   - string[] a_login_activity_visit: The activity keys of the bookings that were made.
     *   - string[] a_visit: The keys of visits.
     *   - array[] a_visit_payment: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Finish/Finish.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_uid' => $this->a_uid,
            'is_walk_in' => $this->is_walk_in,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            'a_book_data' => $this->a_book_data,
            'a_user' => $this->a_user,
            'id_pay' => $this->id_pay,
            'k_appointment' => $this->k_appointment,
            'k_timezone' => $this->k_timezone,
            'a_answer' => $this->a_answer,
            'a_notification' => $this->a_notification,
            'a_pay_form' => $this->a_pay_form,
            'a_payment_data' => $this->a_payment_data,
            'a_purchase_item' => $this->a_purchase_item,
            'a_quiz_response' => $this->a_quiz_response,
            'id_mode' => $this->id_mode,
            'is_back_to_back' => $this->is_back_to_back,
            'is_unpaid_force' => $this->is_unpaid_force,
            'm_pay' => $this->m_pay,
            's_id' => $this->s_id,
            ],
            static fn($v) => $v !== null
        );
    }
}
