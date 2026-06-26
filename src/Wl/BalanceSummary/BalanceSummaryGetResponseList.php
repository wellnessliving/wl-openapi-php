<?php

namespace WlSdk\Wl\BalanceSummary;

class BalanceSummaryGetResponseList
{
    /**
     * The pay method key.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * The name of the account method.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Opening account balance. Before the start of the report filter period.
     *
     * @var string|null
     */
    public ?string $m_opening_balance = null;

    /**
     * Total account balance.
     *
     * @var string|null
     */
    public ?string $f_total = null;

    public function __construct(array $data)
    {
        $this->k_pay_method = isset($data['k_pay_method']) ? (string)$data['k_pay_method'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->m_opening_balance = isset($data['m_opening_balance']) ? (string)$data['m_opening_balance'] : null;
        $this->f_total = isset($data['f_total']) ? (string)$data['f_total'] : null;
    }
}
