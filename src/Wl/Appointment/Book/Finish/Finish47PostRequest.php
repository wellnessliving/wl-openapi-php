<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

class Finish47PostRequest
{
    /**
     * List of user keys to book appointments.
     * There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Data to create new user.
     * Specify this if `uid` is empty.
     * Must contain the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_user = null;

    /**
     * The payment type ID for the appointment. One of the
     * [RsAppointmentPaySid](#/components/schemas/RsAppointmentPaySid) constants.
     *
     * @var int|null
     */
    public ?int $id_pay = null;

    /**
     * If `true`, the client is a walk-in. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * The appointment key.
     * This should be set if you're rebooking an existing appointment.
     * 
     * Otherwise, use `0` to book a new appointment.
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
     * Key of timezone.
     * 
     * `null` if not set then use default timezone client.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * The user key.
     * 
     * This field is used if the client books for himself or for the relative.
     * 
     * This field is incorrect to use for guest booking since in this case the client will be checked as a
     * relative.
     * 
     * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * A list of answers for the questions from [QuestionApi](/Wl/Appointment/Book/Question/Question.json).
     * Keys refer to hashes of the questions. Values refer to answers for the questions.
     *
     * @var string[]|null
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
     * Empty if no purchases are made for the appointment booking.
     *
     * @var string[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * List of quiz response keys.
     * Key is quiz key.
     * Value is quiz response key.
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
     * If `true`, the appointment is booked as unpaid. Otherwise, this will be `false` to select an available
     * Purchase Option.
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

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'a_user' => $this->a_user,
            'id_pay' => $this->id_pay,
            'is_walk_in' => $this->is_walk_in,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_timezone' => $this->k_timezone,
            'uid' => $this->uid,
            'a_answer' => $this->a_answer,
            'a_book_data' => $this->a_book_data,
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
