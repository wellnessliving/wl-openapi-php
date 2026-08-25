<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListPostResponseTotal
{
    /**
     * One entry per client type that discounts at least one of the selected items for at least one of the
     * clients. Empty when no client type discount applies. Each element has the following structure:
     *
     * @var PurchaseItemListPostResponseTotalDiscountList|null
     */
    public ?PurchaseItemListPostResponseTotalDiscountList $a_discount_list = null;

    /**
     * The number of clients that paid by account.
     *
     * @var int|null
     */
    public ?int $i_pay_account = null;

    /**
     * The number of clients that paid by card or ACH.
     *
     * @var int|null
     */
    public ?int $i_pay_card = null;

    /**
     * The total amount paid by account.
     *
     * @var string|null
     */
    public ?string $m_pay_account = null;

    /**
     * The total amount paid by card or ACH.
     *
     * @var string|null
     */
    public ?string $m_pay_card = null;

    /**
     * The price of the selected items for all the clients, with the client type discounts applied.
     *
     * @var string|null
     */
    public ?string $m_subtotal_after_discount = null;

    /**
     * The price of the selected items for all the clients, before any discount.
     *
     * @var string|null
     */
    public ?string $m_subtotal_before_discount = null;

    /**
     * The price of the selected items for one client, before any discount. It is the same for every client,
     * because a discount depends on the client type.
     *
     * @var string|null
     */
    public ?string $m_subtotal_per_client = null;

    /**
     * The amount the whole batch charges, with the client type discounts applied, the taxes accounted and
     * surcharges added.
     *
     * @var string|null
     */
    public ?string $m_total_batch = null;

    /**
     * The surcharges of all the clients, each derived from the amount that single client is charged. Only the
     * clients whose payment method the business surcharges are counted in. Zero when the client accounts are
     * billed, or when neither `is_surcharge_ach` nor `is_surcharge_ecommerce` is requested.
     *
     * @var string|null
     */
    public ?string $m_total_surcharge = null;

    /**
     * The taxes of the selected items for all the clients. Zero when `is_tax` is `false`.
     *
     * @var string|null
     */
    public ?string $m_total_tax = null;

    public function __construct(array $data)
    {
        $this->a_discount_list = isset($data['a_discount_list']) ? new PurchaseItemListPostResponseTotalDiscountList((array)$data['a_discount_list']) : null;
        $this->i_pay_account = isset($data['i_pay_account']) ? (int)$data['i_pay_account'] : null;
        $this->i_pay_card = isset($data['i_pay_card']) ? (int)$data['i_pay_card'] : null;
        $this->m_pay_account = isset($data['m_pay_account']) ? (string)$data['m_pay_account'] : null;
        $this->m_pay_card = isset($data['m_pay_card']) ? (string)$data['m_pay_card'] : null;
        $this->m_subtotal_after_discount = isset($data['m_subtotal_after_discount']) ? (string)$data['m_subtotal_after_discount'] : null;
        $this->m_subtotal_before_discount = isset($data['m_subtotal_before_discount']) ? (string)$data['m_subtotal_before_discount'] : null;
        $this->m_subtotal_per_client = isset($data['m_subtotal_per_client']) ? (string)$data['m_subtotal_per_client'] : null;
        $this->m_total_batch = isset($data['m_total_batch']) ? (string)$data['m_total_batch'] : null;
        $this->m_total_surcharge = isset($data['m_total_surcharge']) ? (string)$data['m_total_surcharge'] : null;
        $this->m_total_tax = isset($data['m_total_tax']) ? (string)$data['m_total_tax'] : null;
    }
}
