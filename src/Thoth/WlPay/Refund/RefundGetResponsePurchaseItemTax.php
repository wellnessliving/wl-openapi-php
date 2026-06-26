<?php

namespace WlSdk\Thoth\WlPay\Refund;

class RefundGetResponsePurchaseItemTax
{
    /**
     * Tax refund amount.
     *
     * @var string|null
     */
    public ?string $f_pay_tax_refund = null;

    /**
     * Formatted tax amount.
     *
     * @var string|null
     */
    public ?string $html_tax = null;

    /**
     * Formatted tax refund amount.
     *
     * @var string|null
     */
    public ?string $html_tax_refund = null;

    /**
     * Tax name.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Tax key. Primary key in RsTaxSql table.
     *
     * @var string|null
     */
    public ?string $k_tax = null;

    /**
     * Purchase item key. Primary key in the RsPurchaseItemSql table.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Amount of tax for all units of a purchase item, after application discount.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    public function __construct(array $data)
    {
        $this->f_pay_tax_refund = isset($data['f_pay_tax_refund']) ? (string)$data['f_pay_tax_refund'] : null;
        $this->html_tax = isset($data['html_tax']) ? (string)$data['html_tax'] : null;
        $this->html_tax_refund = isset($data['html_tax_refund']) ? (string)$data['html_tax_refund'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->k_tax = isset($data['k_tax']) ? (string)$data['k_tax'] : null;
        $this->k_purchase_item = isset($data['k_purchase_item']) ? (string)$data['k_purchase_item'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
    }
}
