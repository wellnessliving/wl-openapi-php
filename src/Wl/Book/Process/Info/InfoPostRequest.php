<?php
namespace WlSdk\Wl\Book\Process\Info;

class InfoPostRequest
{
    /**
     * Date/time to which session is booked.
     *
     * @var string|null
     */
    public ?string $dt_date_gmt = null;

    /**
     * The mode type. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var \WlSdk\Wl\Mode\ModeSid|null
     */
    public ?\WlSdk\Wl\Mode\ModeSid $id_mode = null;

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
     * A list of assets being booked. Every element has the next structure:
     *
     * @var array[]|null
     */
    public ?array $a_resource = null;

    /**
     * The selected sessions.
     * 
     * Keys are class period keys. 
     * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session_select = null;

    /**
     * Selected sessions on the waiting list without pay.
     * 
     * Keys are class period keys. 
     * Values are index arrays of dates/time strings when the session occurred, in MySQL format and in GMT.
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
     * Determines if the user has agreed to the liability release.
     * `true` - if  the user has agreed. Otherwise, this will be.
     * `false` - if the user hasn't agreed or the agreement isn't required.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

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
     * Session pass to be used to book a class.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * User signature.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode?->value,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'show_relation' => $this->show_relation,
            'uid' => $this->uid,
            'a_repeat' => $this->a_repeat,
            'a_resource' => $this->a_resource,
            'a_session_select' => $this->a_session_select,
            'a_session_wait_list_unpaid' => $this->a_session_wait_list_unpaid,
            'can_book' => $this->can_book,
            'is_agree' => $this->is_agree,
            'is_book_unpaid' => $this->is_book_unpaid,
            'is_force_pay_later' => $this->is_force_pay_later,
            'k_login_promotion' => $this->k_login_promotion,
            'k_session_pass' => $this->k_session_pass,
            's_signature' => $this->s_signature,
            ],
            static fn($v) => $v !== null
        );
    }
}
