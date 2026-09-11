<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfigRegistrationFeeList
{
    /**
     * Manual discount applied to the registration fee:
     *
     * @var CatalogCartGetResponseItemConfigRegistrationFeeListDiscount|null
     */
    public ?CatalogCartGetResponseItemConfigRegistrationFeeListDiscount $a_discount = null;

    /**
     * List of taxes applied to the registration fee:
     *      Keys are internal system tax keys.
     *      Values are amount of taxes applied to the registration fee.
     *      If not specified or `null`, taxes will be calculated based on the class setup.
     *
     * @var array|null
     */
    public ?array $a_tax = null;

    /**
     * Registration fee amount for the tuition participant.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Total discount amount actually applied to the registration fee.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    public function __construct(array $data)
    {
        $this->a_discount = isset($data['a_discount']) ? new CatalogCartGetResponseItemConfigRegistrationFeeListDiscount((array)$data['a_discount']) : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
    }
}
