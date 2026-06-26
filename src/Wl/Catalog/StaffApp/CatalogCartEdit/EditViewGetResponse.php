<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCartEdit;

/**
 * Response from GET
 */
class EditViewGetResponse
{
    /**
     * Contains information about taxes. Structure of this array is described in `a_tax`.
     *
     * @var array|null
     */
    public ?array $a_tax_data = null;

    /**
     * Discount value of the sale item.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Prorate amount.
     *
     * @var string|null
     */
    public ?string $m_prorate = null;

    /**
     * Amount of sale item without taxes.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * Amount of tax.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * Amount of sale item including taxes and quantity.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    public function __construct(array $data)
    {
        $this->a_tax_data = isset($data['a_tax_data']) ? (array)$data['a_tax_data'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_prorate = isset($data['m_prorate']) ? (string)$data['m_prorate'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
    }
}
