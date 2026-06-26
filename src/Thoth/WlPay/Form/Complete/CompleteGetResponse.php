<?php

namespace WlSdk\Thoth\WlPay\Form\Complete;

/**
 * Response from GET
 */
class CompleteGetResponse
{
    /**
     * Analytics function arguments.
     *
     * @var array|null
     */
    public ?array $a_arguments = null;

    /**
     * ID of purchase currency. Primary key in RsCurrencySql table.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Purchase cost.
     *
     * @var string|null
     */
    public ?string $m_cost = null;

    /**
     * Number of receipt.
     *
     * @var string|null
     */
    public ?string $s_purchase = null;

    public function __construct(array $data)
    {
        $this->a_arguments = isset($data['a_arguments']) ? (array)$data['a_arguments'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->m_cost = isset($data['m_cost']) ? (string)$data['m_cost'] : null;
        $this->s_purchase = isset($data['s_purchase']) ? (string)$data['s_purchase'] : null;
    }
}
