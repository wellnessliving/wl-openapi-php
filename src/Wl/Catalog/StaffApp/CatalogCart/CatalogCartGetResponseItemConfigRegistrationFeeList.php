<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfigRegistrationFeeList
{
    /**
     * List of taxes to be applied to the registration fee:
     *      Keys are internal system tax keys.
     *      Values are amount of taxes to be applied to the registration fee.
     *
     * @var array|null
     */
    public ?array $a_tax_fee = null;

    /**
     * Registration fee amount for the tuition participant.
     *
     * @var string|null
     */
    public ?string $m_amount_fee = null;

    public function __construct(array $data)
    {
        $this->a_tax_fee = isset($data['a_tax_fee']) ? (array)$data['a_tax_fee'] : null;
        $this->m_amount_fee = isset($data['m_amount_fee']) ? (string)$data['m_amount_fee'] : null;
    }
}
