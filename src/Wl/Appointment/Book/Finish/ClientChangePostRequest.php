<?php

namespace WlSdk\Wl\Appointment\Book\Finish;

class ClientChangePostRequest
{
    /**
     * `true` if the new client is a walk-in: a client without a profile, who has no key. {@link
     * \WlSdk\Wl\Appointment\Book\Finish\ClientChange}
     * is ignored then. `false` if the new client is the user {@link
     * \WlSdk\Wl\Appointment\Book\Finish\ClientChange}.
     *
     * @var bool|null
     */
    public ?bool $is_walk_in = null;

    /**
     * The appointment key of the original appointment whose client is being changed.
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
     * The location of the original appointment and of the new booking.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The visit key of the original visit being cancelled.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The user key of the new client to book.
     *
     * @var string|null
     */
    public ?string $uid_new = null;

    /**
     * The user key of the original client whose visit is being cancelled.
     * For walk-in appointments, this should be empty.
     *
     * @var string|null
     */
    public ?string $uid_original = null;

    /**
     * A list of answers for the questions from {@link
     * \WlSdk\Wl\Appointment\Book\Question\QuestionGetResponse::$a_question}.
     *
     * Keys refer to hashes of the questions. Values refer to answers for the questions.
     *
     * @var string[]|null
     */
    public ?array $a_answer = null;

    /**
     * All data required to book the new appointment for the replacement client.
     *
     * Uses the same format as a single element of the `a_provider` array within
     * {@link \WlSdk\Wl\Appointment\Book\Finish\FinishMultiple}.
     *
     * @var array|null
     */
    public ?array $a_book_data = null;

    /**
     * Information for sending an appointment notification to the new client.
     *
     * @var array|null
     */
    public ?array $a_notification = null;

    /**
     * Edited content of the cancellation notification for the original client.
     * Used only when the visit is cancelled. A denial of a request sends the standard denial mail and ignores this
     * field.
     *
     * @var array|null
     */
    public ?array $a_notification_cancel = null;

    /**
     * The list of quiz response keys.
     * Key is quiz key.
     * Value is quiz response key.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response = null;

    /**
     * The booking service type. One of the {@link \WlSdk\Wl\Classes\Tab\TabSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Classes\Tab\TabSid
     */
    public ?int $id_class_tab = null;

    /**
     * The mode type. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * The status of the original visit that the staff member saw. One of the {@link \WlSdk\Wl\Visit\VisitSid}
     * constants.
     *
     * When the visit has another status when the request is processed, the request is refused.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * `true` if the staff member confirmed the denial of an unanswered booking request (the original visit is
     * ended as the denial of a request in the back office does it, the denial mail is always sent).
     * `false` if the staff member confirmed the early cancel of the visit.
     *
     * @var bool|null
     */
    public ?bool $is_deny = null;

    /**
     * `true` to send cancellation mail to the original client.
     * `false` to suppress cancellation mail.
     *
     * @var bool|null
     */
    public ?bool $is_inform_mail = true;

    /**
     * `true` to send cancellation push notification to the original client.
     * `false` to suppress push notification.
     *
     * @var bool|null
     */
    public ?bool $is_inform_push = true;

    /**
     * `true` to send cancellation SMS to the original client.
     * `false` to suppress SMS notification.
     *
     * @var bool|null
     */
    public ?bool $is_inform_sms = true;

    /**
     * Unique identifier of the wizard.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * The reason of the cancellation. Ignored when the request is denied.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_walk_in' => $this->is_walk_in,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            'uid_new' => $this->uid_new,
            'uid_original' => $this->uid_original,
            'a_answer' => $this->a_answer,
            'a_book_data' => $this->a_book_data,
            'a_notification' => $this->a_notification,
            'a_notification_cancel' => $this->a_notification_cancel,
            'a_quiz_response' => $this->a_quiz_response,
            'id_class_tab' => $this->id_class_tab,
            'id_mode' => $this->id_mode,
            'id_visit' => $this->id_visit,
            'is_deny' => $this->is_deny,
            'is_inform_mail' => $this->is_inform_mail,
            'is_inform_push' => $this->is_inform_push,
            'is_inform_sms' => $this->is_inform_sms,
            's_id' => $this->s_id,
            'text_reason' => $this->text_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
