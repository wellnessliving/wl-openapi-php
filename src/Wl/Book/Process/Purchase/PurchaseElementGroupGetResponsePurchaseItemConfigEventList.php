<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementGroupGetResponsePurchaseItemConfigEventList
{
    /**
     * Discounts applied to the event, `null` if there are none. Every row has the
     *      next keys:
     *
     * @var PurchaseElementGroupGetResponsePurchaseItemConfigEventListDiscount|null
     */
    public ?PurchaseElementGroupGetResponsePurchaseItemConfigEventListDiscount $a_discount = null;

    /**
     * Taxes of the event. Keys are tax keys, values are tax amounts.
     *
     * @var string[]|null
     */
    public ?array $a_tax = null;

    /**
     * Key of the event class.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The amount charged for this event right now, including tax. `0.00` when every
     *      installment payment is still ahead. `null` when it is not calculated yet.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The taxes charged for this event right now, keyed by tax key. `a_tax` is the tax of the
     *      full price.
     *
     * @var string[]|null
     */
    public ?array $a_checkout_tax = null;

    /**
     * The price charged for this event right now, before discount and tax.
     *
     * @var string|null
     */
    public ?string $m_checkout_subtotal = null;

    /**
     * The tax charged for this event right now: the sum of `a_checkout_tax`.
     *
     * @var string|null
     */
    public ?string $m_checkout_tax = null;

    /**
     * The discount taken from `m_checkout_subtotal`, `m_discount` is the discount of the full
     *      price. Every row of `a_discount` has its part of it in `m_discount_checkout`.
     *
     * @var string|null
     */
    public ?string $m_discount_checkout = null;

    /**
     * The part of the event cost that is not charged right now, including tax. Goes
     *      to the installment plan or to the membership schedule, depending on the
     *      tuition billing mode.
     *
     * @var string|null
     */
    public ?string $m_deferred = null;

    /**
     * Total discount amount applied to the event, `0.00` if there is none.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Price of the event within the tuition, before discount and tax.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Key of the tuition participant.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_discount = isset($data['a_discount']) ? new PurchaseElementGroupGetResponsePurchaseItemConfigEventListDiscount((array)$data['a_discount']) : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->a_checkout_tax = isset($data['a_checkout_tax']) ? (array)$data['a_checkout_tax'] : null;
        $this->m_checkout_subtotal = isset($data['m_checkout_subtotal']) ? (string)$data['m_checkout_subtotal'] : null;
        $this->m_checkout_tax = isset($data['m_checkout_tax']) ? (string)$data['m_checkout_tax'] : null;
        $this->m_discount_checkout = isset($data['m_discount_checkout']) ? (string)$data['m_discount_checkout'] : null;
        $this->m_deferred = isset($data['m_deferred']) ? (string)$data['m_deferred'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
