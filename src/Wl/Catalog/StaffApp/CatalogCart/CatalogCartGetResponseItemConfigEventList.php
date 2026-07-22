<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfigEventList
{
    /**
     * Discount applied to the event price:
     *
     * @var CatalogCartGetResponseItemConfigEventListDiscount|null
     */
    public ?CatalogCartGetResponseItemConfigEventListDiscount $a_discount = null;

    /**
     * Key of the event class within the tuition which should be granted to the client.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The amount that will be charged for this event when the tuition is purchased.
     *      Calculated based on the payment schedule (full amount or the prorated part due now).
     *      Can be overridden manually. If not specified or `null`, the amount will be calculated
     *      automatically.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

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
        $this->a_discount = isset($data['a_discount']) ? new CatalogCartGetResponseItemConfigEventListDiscount((array)$data['a_discount']) : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
