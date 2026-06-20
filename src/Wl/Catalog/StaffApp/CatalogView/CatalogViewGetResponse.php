<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogView;

/**
 * Response from GET
 */
class CatalogViewGetResponse
{
    /**
     * Contains information about calculated taxes.
     *
     * @var CatalogViewGetResponseTaxData|null
     */
    public ?CatalogViewGetResponseTaxData $a_tax_data = null;

    /**
     * The prorated amount.
     *
     * @var string|null
     */
    public ?string $m_prorate = null;

    /**
     * The amount of the sale item, excluding taxes.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * The calculated amount of tax.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * The calculated amount of the sale item, including taxes.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    public function __construct(array $data)
    {
        $this->a_tax_data = isset($data['a_tax_data']) ? new CatalogViewGetResponseTaxData((array)$data['a_tax_data']) : null;
        $this->m_prorate = isset($data['m_prorate']) ? (string)$data['m_prorate'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
    }
}
