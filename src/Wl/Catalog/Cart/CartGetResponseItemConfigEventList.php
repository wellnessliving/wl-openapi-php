<?php

namespace WlSdk\Wl\Catalog\Cart;

class CartGetResponseItemConfigEventList
{
    /**
     * Output only. The taxes charged right now for this event, keyed by tax key.  `a_tax` is the tax of the full
     * event price.
     *
     * @var string[]|null
     */
    public ?array $a_checkout_tax = null;

    /**
     * Output only. Discounts applied to the event price:
     *
     * @var CartGetResponseItemConfigEventListDiscount|null
     */
    public ?CartGetResponseItemConfigEventListDiscount $a_discount = null;

    /**
     * Output only. The taxes of the full event price. Keys are tax keys.
     *
     * @var array|null
     */
    public ?array $a_tax = null;

    /**
     * Key of the event class.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Output only. The amount that will be charged for this event when the tuition is purchased, including
     * tax: `m_checkout_subtotal` minus `m_discount_checkout` plus `m_checkout_tax`. It is the prorated part
     * of the event when the first payment is prorated.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * Output only. The price of the event that is charged when the tuition is purchased, before discount
     * and before tax: the prorated price when the first payment is prorated, the full price when it is not.
     *
     * @var string|null
     */
    public ?string $m_checkout_subtotal = null;

    /**
     * Output only. The sum of `a_checkout_tax`.
     *
     * @var string|null
     */
    public ?string $m_checkout_tax = null;

    /**
     * Output only. The discount of the full event price.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Output only. The sum of `m_discount_checkout` of `a_discount`: the discount taken from
     * `m_checkout_subtotal`.
     *
     * @var string|null
     */
    public ?string $m_discount_checkout = null;

    /**
     * Key of the tuition participant.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_checkout_tax = isset($data['a_checkout_tax']) ? (array)$data['a_checkout_tax'] : null;
        $this->a_discount = isset($data['a_discount']) ? new CartGetResponseItemConfigEventListDiscount((array)$data['a_discount']) : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_checkout_subtotal = isset($data['m_checkout_subtotal']) ? (string)$data['m_checkout_subtotal'] : null;
        $this->m_checkout_tax = isset($data['m_checkout_tax']) ? (string)$data['m_checkout_tax'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_checkout = isset($data['m_discount_checkout']) ? (string)$data['m_discount_checkout'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
