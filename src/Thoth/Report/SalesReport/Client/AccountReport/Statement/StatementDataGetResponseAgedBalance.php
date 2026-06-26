<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

class StatementDataGetResponseAgedBalance
{
    /**
     * Remaining unpaid amount from charges on the statement date.
     *
     * @var string|null
     */
    public ?string $m_current = null;

    /**
     * Remaining unpaid amount from charges 1-30 days past due.
     *
     * @var string|null
     */
    public ?string $m_days_1_30 = null;

    /**
     * Remaining unpaid amount from charges 31-60 days past due.
     *
     * @var string|null
     */
    public ?string $m_days_31_60 = null;

    /**
     * Remaining unpaid amount from charges 61-90 days past due.
     *
     * @var string|null
     */
    public ?string $m_days_61_90 = null;

    /**
     * Remaining unpaid amount from charges more than 90 days past due.
     *
     * @var string|null
     */
    public ?string $m_days_90_plus = null;

    public function __construct(array $data)
    {
        $this->m_current = isset($data['m_current']) ? (string)$data['m_current'] : null;
        $this->m_days_1_30 = isset($data['m_days_1_30']) ? (string)$data['m_days_1_30'] : null;
        $this->m_days_31_60 = isset($data['m_days_31_60']) ? (string)$data['m_days_31_60'] : null;
        $this->m_days_61_90 = isset($data['m_days_61_90']) ? (string)$data['m_days_61_90'] : null;
        $this->m_days_90_plus = isset($data['m_days_90_plus']) ? (string)$data['m_days_90_plus'] : null;
    }
}
