<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

class FinishMultiplePostRequest
{
    /**
     * The payment type for the appointment. One of the {@link \WlSdk\RsAppointmentPaySid} constants.
     * 
     * Keys refer to provider indexes.
     *
     * @var int[]|null
     */
    public ?array $a_pay = null;

    /**
     * List of user keys to book appointments.
     * There may be empty values in this list, which means that this is a walk-in.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Data to create new users.
     * Specify this if `$uid` is empty.
     * The data must contain the next keys:
     *
     * @var array|null
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
     * Specify this to reschedule a certain appointment.
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
     * 
     * 1st dimension - provider index.
     * 2nd dimension - keys refer to hashes of the questions. Values refer to answers for the questions.
     *
     * @var string[][]|null
     */
    public ?array $a_answer = null;

    /**
     * All data required to book an appointment.
     *
     * @var array|null
     */
    public ?array $a_book_data = null;

    /**
     * Information for sending an appointment notification.
     *
     * @var array|null
     */
    public ?array $a_notification = null;

    /**
     * The sum paid.
     * 
     * Keys refer to provider indexes.
     *
     * @var string[]|null
     */
    public ?array $a_paid = null;

    /**
     * A list of payment sources to pay with.
     * 
     * Each source contains:
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * Data required for payment with the next structure:
     *
     * @var array|null
     */
    public ?array $a_payment_data = null;

    /**
     * The purchase items keys.
     * This will be empty if no purchases have been made for the appointment booking.
     * 
     * Keys refer to provider indexes.
     * Value is array of item keys.
     *
     * @var string[][]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * The list of quiz response keys.
     * Key is quiz key.
     * Value is quiz response key.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response = null;

    /**
     * The mode type. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
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
     * Otherwise, this will be `false`.
     * 
     * If the flag is set to `true`, credit card requirement will be ignored during this check.
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

    public function params(): array
    {
        return array_filter(
            [
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
