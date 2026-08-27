<?php

namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementListGetResponsePurchaseItemResult
{
    /**
     * Tuition events with calculated amounts.
     *
     * Each entry has the next structure:
     *
     * @var PurchaseElementListGetResponsePurchaseItemResultEventList|null
     */
    public ?PurchaseElementListGetResponsePurchaseItemResultEventList $a_event_list = null;

    /**
     * Registration fees with calculated amounts, keyed by participant key.
     *
     *
     * Each value has the next structure:
     *
     * @var PurchaseElementListGetResponsePurchaseItemResultRegistrationFeeList|null
     */
    public ?PurchaseElementListGetResponsePurchaseItemResultRegistrationFeeList $a_registration_fee_list = null;

    /**
     * Information about taxes. The key refers to the tax key, and the value refers to the tax amount.
     *
     * @var string[]|null
     */
    public ?array $a_tax = null;

    /**
     * The ID of purchase item type. One of {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * The key of the purchase item in the database.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The amount that has to be charged for the tuition right now, including tax. The other
     * amounts of this row cover the full cost, including whatever is deferred to an installment
     * plan or to a membership schedule.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The part of the tuition cost that is not charged right now, including tax. Equals
     * `m_cost` minus `m_checkout`. Rows for everything else are always paid for in full at once,
     * so the amount to charge for the whole list is the sum of `m_cost` minus the sum of
     * `m_deferred`.
     *
     * @var string|null
     */
    public ?string $m_deferred = null;

    /**
     * The cost of the purchase item (with taxes).
     *
     * @var string|null
     */
    public ?string $m_cost = null;

    /**
     * The amount of the whole discount.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The amount of the discount for the client type.
     *
     * @var string|null
     */
    public ?string $m_discount_login = null;

    /**
     * The price of the purchase item (with or without taxes, depending on regional standards).
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The amount of taxes for the purchase item.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    public function __construct(array $data)
    {
        $this->a_event_list = isset($data['a_event_list']) ? new PurchaseElementListGetResponsePurchaseItemResultEventList((array)$data['a_event_list']) : null;
        $this->a_registration_fee_list = isset($data['a_registration_fee_list']) ? new PurchaseElementListGetResponsePurchaseItemResultRegistrationFeeList((array)$data['a_registration_fee_list']) : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_deferred = isset($data['m_deferred']) ? (string)$data['m_deferred'] : null;
        $this->m_cost = isset($data['m_cost']) ? (string)$data['m_cost'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_login = isset($data['m_discount_login']) ? (string)$data['m_discount_login'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
    }
}
