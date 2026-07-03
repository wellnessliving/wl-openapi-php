<?php

namespace WlSdk\Wl\Book\Process\Resource;

class Resource54PostRequest
{
    /**
     * The selected sessions.
     * Only makes sense for session events.
     * Optional parameter for GET request: if not passed, all available sessions will be used.
     *
     * Keys are class period keys.
     * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
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
     * The mode type. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * `true` if action is performed as a staff member; `false` otherwise.
     *
     * If `true` is sent, access to the business and to the client will be checked.
     * If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag
     * is set to `false`.
     *
     * Use this field with caution.
     * The final booking will not use this flag, and the check will still be performed.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * Selected sessions.
     * Only makes sense for session events.
     * Optional parameter for GET request: if not passed, all available sessions will be used.
     *
     * Fields - IDs of sessions in database.
     * Values - arrays of date/time when session is occurred. In MySQL format. In GMT.
     *
     * Serialized with JSON.
     *
     * @var string|null
     */
    public ?string $json_session = null;

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
     * Information about the recurring booking:
     *
     *
     * This will be `null` if the booking isn't recurring.
     *
     * @var array|null
     */
    public ?array $a_repeat = null;

    /**
     * The selected assets. Every element has the next keys:
     *
     * @var array|null
     */
    public ?array $a_resource_select = null;

    /**
     * The selected sessions on the wait list that are unpaid.
     *
     * Keys are class period keys.
     * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session_wait_list_unpaid = null;

    /**
     * Determines whether the class/event can be booked at this step or not.
     * This is an external process control flag.
     *
     * @var bool|null
     */
    public ?bool $can_book = null;

    /**
     * `true` to book unpaid.
     * `false` otherwise.
     *
     * Allows booking unpaid when client has a login promotion that can be used to pay for the service.
     * Allowed in {@link \WlSdk\Wl\Mode\ModeSid} mode only.
     *
     * @var bool|null
     */
    public ?bool $is_book_unpaid = null;

    /**
     * `true` if user pressed 'Pay later'.
     * `false` if user pressed 'Pay now'.
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
     * Host login promotion key that grants the guest pass used to pay for the guest's visit.
     * Empty string if the booking is not paid with a guest pass.
     *
     * @var string|null
     */
    public ?string $k_login_promotion_guest_pass = null;

    /**
     * Session pass to be used to book a class.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_session' => $this->a_session,
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'json_session' => $this->json_session,
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
            'k_login_promotion_guest_pass' => $this->k_login_promotion_guest_pass,
            'k_session_pass' => $this->k_session_pass,
            ],
            static fn ($v) => $v !== null
        );
    }
}
