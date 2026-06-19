<?php
namespace WlSdk\Wl\Book\Process\Payment;

use WlSdk\WlSdkClient;

/**
 * Processes purchases and books sessions on the "Pay/Billing info" step of the booking wizard.
 */
class PaymentApi
{
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
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * List of quiz response keys.
     * 
     * Keys are quiz keys. 
     * Values are response keys. 
     * Or the `skip` to skip the quiz.
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
     * A list of sessions being booked.
     * 
     * Keys are class period keys. 
     * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
     *
     * @var string[]|null
     */
    public ?array $a_session = null;

    /**
     * Selected sessions on the waiting list without pay.
     * 
     * Keys are class period keys. 
     * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT
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
     * Allowed in [ModeSid::WIDGET](#/components/schemas/Wl.Mode.ModeSid) mode only.
     *
     * @var bool|null
     */
    public ?bool $is_book_unpaid = null;

    /**
     * If client must authorize credit card.
     *
     * @var bool|null
     */
    public ?bool $is_card_authorize = null;

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
     * The installment template key.
     * This property is optional, and it will be `null` if an installment plan doesn't exist for the purchased
     * item.
     * This will be `0` if an installment plan isn't selected for the purchased item from the list of installment
     * plans.
     *
     * @var string|null
     */
    public ?string $k_pay_installment_template = null;

    /**
     * Session pass to be used to book a class.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

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
     * Processes purchases and books sessions on the "Pay/Billing info" step of the booking wizard.
     *
     * Accepts the selected purchase items, payment form, optional discount code, and installment template, then
     * collects payment, applies discounts and prizes, and creates the booking records. Returns visit keys,
     * activity
     * keys, and purchase activity key upon success.
     *
     * @return PaymentApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): PaymentApiPostResponse
    {
        return new PaymentApiPostResponse($this->client->request('/Wl/Book/Process/Payment/Payment.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'show_relation' => $this->show_relation,
            'uid' => $this->uid,
            'a_item' => $this->a_item,
            'a_pay_form' => $this->a_pay_form,
            'a_quiz_response' => $this->a_quiz_response,
            'a_repeat' => $this->a_repeat,
            'a_resource' => $this->a_resource,
            'a_session' => $this->a_session,
            'a_session_wait_list_unpaid' => $this->a_session_wait_list_unpaid,
            'can_book' => $this->can_book,
            'is_book_unpaid' => $this->is_book_unpaid,
            'is_card_authorize' => $this->is_card_authorize,
            'is_force_pay_later' => $this->is_force_pay_later,
            'k_login_promotion' => $this->k_login_promotion,
            'k_pay_installment_template' => $this->k_pay_installment_template,
            'k_session_pass' => $this->k_session_pass,
            'text_discount_code' => $this->text_discount_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
