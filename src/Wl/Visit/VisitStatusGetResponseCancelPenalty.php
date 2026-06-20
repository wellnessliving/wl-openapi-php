<?php
namespace WlSdk\Wl\Visit;

class VisitStatusGetResponseCancelPenalty
{
    /**
     * `true` in a case of flat penalty type; `false` in a case of percentage penalty type.
     *
     * @var bool|null
     */
    public ?bool $is_flat = null;

    /**
     * Currency .
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Penalty amount.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    public function __construct(array $data)
    {
        $this->is_flat = isset($data['is_flat']) ? (bool)$data['is_flat'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
    }
}
