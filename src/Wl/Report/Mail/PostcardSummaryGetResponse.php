<?php

namespace WlSdk\Wl\Report\Mail;

/**
 * Response from GET
 */
class PostcardSummaryGetResponse
{
    /**
     * Quantity of recipients.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * Current currency of the business.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Total cost of postcards.
     *
     * @var string|null
     */
    public ?string $m_cost = null;

    public function __construct(array $data)
    {
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->m_cost = isset($data['m_cost']) ? (string)$data['m_cost'] : null;
    }
}
