<?php
namespace WlSdk\Wl\Catalog\Payment;

class PaymentPostRequest
{
    /**
     * The staff commission earned for this purchase. If this isn't empty, it has the next fields:
     *
     * @var array[]|null
     */
    public ?array $a_commission = null;

    /**
     * The WellnessLiving mode type (required). One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * Determines if the payment owner is an anonymous user (optional).
     *
     * @var bool|null
     */
    public ?bool $is_guest = null;

    /**
     * Specify this if operations are performed by the staff member (optional).
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * The business key (required).
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key (required).
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user's key (required).
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
     * The list of quiz response keys.
     * Keys refer to quiz keys. 
     * And values refer to responses. 
     * Or special values from the `skip` constant.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response = null;

    /**
     * The percentage discount (optional).
     *
     * @var float|null
     */
    public ?float $f_discount_percent = null;

    /**
     * The installment template key (optional).
     * This will be `null` if the installment plan doesn't exist or isn't set for the purchased item.
     *
     * @var string|null
     */
    public ?string $k_pay_installment_template = null;

    /**
     * The visit key to be paid (optional).
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The amount to discount (optional).
     *
     * @var string|null
     */
    public ?string $m_discount_flat = null;

    /**
     * The manual surcharge amount.
     * 
     * An empty string represents an automatic surcharge amount.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * The tip amount (optional).
     *
     * @var string|null
     */
    public ?string $m_tip = null;

    /**
     * The discount code (optional).
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * The custom receipt note.
     *
     * @var string|null
     */
    public ?string $text_receipt_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_commission' => $this->a_commission,
            'id_mode' => $this->id_mode,
            'is_guest' => $this->is_guest,
            'is_staff' => $this->is_staff,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            'a_item' => $this->a_item,
            'a_pay_form' => $this->a_pay_form,
            'a_quiz_response' => $this->a_quiz_response,
            'f_discount_percent' => $this->f_discount_percent,
            'k_pay_installment_template' => $this->k_pay_installment_template,
            'k_visit' => $this->k_visit,
            'm_discount_flat' => $this->m_discount_flat,
            'm_surcharge' => $this->m_surcharge,
            'm_tip' => $this->m_tip,
            'text_discount_code' => $this->text_discount_code,
            'text_receipt_note' => $this->text_receipt_note,
            ],
            static fn($v) => $v !== null
        );
    }
}
