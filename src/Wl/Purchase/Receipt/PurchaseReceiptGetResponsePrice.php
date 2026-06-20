<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponsePrice
{
    /**
     * The discount amount.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The discount amount for a discount code.
     *
     * @var string|null
     */
    public ?string $m_discount_code = null;

    /**
     * The subtotal amount (the sum of the prices).
     *
     * @var string|null
     */
    public ?string $m_sum = null;

    /**
     * The amount of taxes.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * The amount of tips.
     *
     * @var string|null
     */
    public ?string $m_tip = null;

    /**
     * The total amount.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    /**
     * The currency of the purchase.
     *
     * @var string|null
     */
    public ?string $text_currency = null;

    /**
     * The discount code applied to the purchase.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    public function __construct(array $data)
    {
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_code = isset($data['m_discount_code']) ? (string)$data['m_discount_code'] : null;
        $this->m_sum = isset($data['m_sum']) ? (string)$data['m_sum'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_tip = isset($data['m_tip']) ? (string)$data['m_tip'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
        $this->text_currency = isset($data['text_currency']) ? (string)$data['text_currency'] : null;
        $this->text_discount_code = isset($data['text_discount_code']) ? (string)$data['text_discount_code'] : null;
    }
}
