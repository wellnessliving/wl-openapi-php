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
     * List of taxes to be applied to the event price:
     *      Keys are internal system tax keys.
     *      Values are amount of taxes to be applied to the event price.
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
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
