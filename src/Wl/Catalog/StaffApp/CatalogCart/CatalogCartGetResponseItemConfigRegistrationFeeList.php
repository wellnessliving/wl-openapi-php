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
     * Registration fee amount for the tuition participant.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    public function __construct(array $data)
    {
        $this->a_discount = isset($data['a_discount']) ? new CatalogCartGetResponseItemConfigRegistrationFeeListDiscount((array)$data['a_discount']) : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
    }
}
