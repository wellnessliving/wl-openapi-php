<?php

namespace WlSdk\Wl\Catalog\Coupon\Payment;

/**
 * Response from GET
 */
class InformationGetResponse
{
    /**
     * Total amount without tax.
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
     * Total amount.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    public function __construct(array $data)
    {
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
    }
}
