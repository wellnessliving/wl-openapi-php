<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementListGetResponsePurchaseItemResultEventList
{
    /**
     * Discounts applied to the event, `null` if there are none. Every row has the next keys:
     *
     * @var PurchaseElementListGetResponsePurchaseItemResultEventListDiscount|null
     */
    public ?PurchaseElementListGetResponsePurchaseItemResultEventListDiscount $a_discount = null;

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
     * installment payment is still ahead. `null` when the amount is not calculated yet.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The part of the event cost that is not charged right now, including tax. Goes to the
     * installment plan or to the membership schedule, depending on the tuition billing mode.
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
        $this->a_discount = isset($data['a_discount']) ? new PurchaseElementListGetResponsePurchaseItemResultEventListDiscount((array)$data['a_discount']) : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_deferred = isset($data['m_deferred']) ? (string)$data['m_deferred'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
