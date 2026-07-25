<?php

namespace WlSdk\Wl\Book\Process;

class ProcessGroupPostRequest
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
    public ?bool $is_credit_card_check = true;

    /**
     * Key of session which is booked.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * List of clients to book.
     * Each value is an array with next keys:
     *
     * @var array[]|null
     */
    public ?array $a_client = null;

    /**
     * A list of payment sources to pay with.
     *
     * Each element has next keys:
     *
     * @var array[]|null
     */
    public ?array $a_pay_form = null;

    /**
     * `true` if user pressed 'Pay later'.
     * `false` if user pressed 'Pay now'.
     *
     * @var bool|null
     */
    public ?bool $is_force_pay_later = null;

    /**
     * Host login promotion key that grants the guest pass used to pay for the guest's visit.
     * Empty string if the booking is not paid with a guest pass.
     *
     * @var string|null
     */
    public ?string $k_login_promotion_guest_pass = null;

    /**
     * The installment template primary key.
     * `null` to not use installment template.
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

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_gmt' => $this->dt_date_gmt,
            'id_mode' => $this->id_mode,
            'is_backend' => $this->is_backend,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_class_period' => $this->k_class_period,
            'a_client' => $this->a_client,
            'a_pay_form' => $this->a_pay_form,
            'is_force_pay_later' => $this->is_force_pay_later,
            'k_login_promotion_guest_pass' => $this->k_login_promotion_guest_pass,
            'k_pay_installment_template' => $this->k_pay_installment_template,
            'text_discount_code' => $this->text_discount_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
