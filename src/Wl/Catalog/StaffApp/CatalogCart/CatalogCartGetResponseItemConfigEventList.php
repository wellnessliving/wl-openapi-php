<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfigEventList
{
    /**
     * Calculated tax amounts for the event enrollment component.
     *      Key is a primary key in RsTaxSql, value is the calculated tax amount (bcmath string).
     *      Populated in the response; not required in the request.
     *
     * @var array|null
     */
    public ?array $a_tax = null;

    /**
     * Calculated tax amounts for the fee component.
     *      Key is a primary key in RsTaxSql, value is the calculated tax amount (bcmath string).
     *      Populated in the response; not required in the request.
     *
     * @var array|null
     */
    public ?array $a_tax_fee = null;

    /**
     * Key of the event class within the tuition which should be granted to the client.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Additional fee amount for the component (bcmath string).
     *      `'0.00'` if no additional fee.
     *
     * @var string|null
     */
    public ?string $m_fee = null;

    /**
     * Override price of the event component within the tuition.
     *      `null` if price should be taken from the class setup.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Key of the client for which component should be granted.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->a_tax_fee = isset($data['a_tax_fee']) ? (array)$data['a_tax_fee'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->m_fee = isset($data['m_fee']) ? (string)$data['m_fee'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
