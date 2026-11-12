<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfigEventList
{
    /**
     * Output only. Additional information about how `m_checkout` was calculated when
     *      the first membership payment is prorated, `null` otherwise:
     *
     * @var CatalogCartGetResponseItemConfigEventListCheckout|null
     */
    public ?CatalogCartGetResponseItemConfigEventListCheckout $a_checkout = null;

    /**
     * Output only. The taxes charged right now for this event, calculated from `m_checkout_subtotal`
     *      after the discounts. Keys are internal system tax keys.
     *      `a_tax` is the tax of the full event price.
     *
     * @var string[]|null
     */
    public ?array $a_checkout_tax = null;

    /**
     * Discount applied to the event price:
     *
     * @var CatalogCartGetResponseItemConfigEventListDiscount|null
     */
    public ?CatalogCartGetResponseItemConfigEventListDiscount $a_discount = null;

    /**
     * List of taxes applied to the event price:
     *      Keys are internal system tax keys.
     *      Values are amount of taxes applied to the event price.
     *      If not specified or `null`, taxes will be calculated based on the class setup.
     *
     * @var array|null
     */
    public ?array $a_tax = null;

    /**
     * Key of the event class within the tuition which should be granted to the client.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Output only. The amount that will be charged for this event when the tuition is purchased,
     *      including tax: `m_checkout_subtotal` minus `m_discount_checkout` plus `m_checkout_tax`.
     *      A value in the request is ignored, use `m_checkout_subtotal` to change the amount.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The price of the event that is charged when the tuition is purchased, before discount and
     *      before tax: the prorated price when the first payment is prorated, the full price when it
     *      is not. This is the only amount that can be changed manually: the discounts and the tax are
     *      taken from it and `m_checkout` is calculated. It can not exceed the price of the event.
     *      If not specified or `null`, the amount will be calculated automatically.
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
     * Output only. The sum of `m_discount_checkout` of `a_discount`: the discount taken from
     *      `m_checkout_subtotal`. `m_discount` is the discount of the full event price.
     *
     * @var string|null
     */
    public ?string $m_discount_checkout = null;

    /**
     * Price of the event for the tuition participant.
     *      If not specified or `null`, price will be calculated based on the class setup.
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
        $this->a_checkout = isset($data['a_checkout']) ? new CatalogCartGetResponseItemConfigEventListCheckout((array)$data['a_checkout']) : null;
        $this->a_checkout_tax = isset($data['a_checkout_tax']) ? (array)$data['a_checkout_tax'] : null;
        $this->a_discount = isset($data['a_discount']) ? new CatalogCartGetResponseItemConfigEventListDiscount((array)$data['a_discount']) : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_checkout_subtotal = isset($data['m_checkout_subtotal']) ? (string)$data['m_checkout_subtotal'] : null;
        $this->m_checkout_tax = isset($data['m_checkout_tax']) ? (string)$data['m_checkout_tax'] : null;
        $this->m_discount_checkout = isset($data['m_discount_checkout']) ? (string)$data['m_discount_checkout'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
