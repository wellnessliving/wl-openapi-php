<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItemConfigEventListCheckout
{
    /**
     * Number of days the first payment is charged for. `null` if prorated by sessions.
     *
     * @var int|null
     */
    public ?int $i_days_prorate = null;

    /**
     * Number of days in the billing cycle. `null` if prorated by sessions.
     *
     * @var int|null
     */
    public ?int $i_days_total = null;

    /**
     * Number of sessions the first payment is charged for. `null` if prorated by days.
     *
     * @var int|null
     */
    public ?int $i_sessions_prorate = null;

    /**
     * Number of sessions in the billing cycle. `null` if prorated by days.
     *
     * @var int|null
     */
    public ?int $i_sessions_total = null;

    /**
     * Prorated amount as calculated by the system, before any manual override of `m_checkout`.
     *
     * @var string|null
     */
    public ?string $m_calculated = null;

    public function __construct(array $data)
    {
        $this->i_days_prorate = isset($data['i_days_prorate']) ? (int)$data['i_days_prorate'] : null;
        $this->i_days_total = isset($data['i_days_total']) ? (int)$data['i_days_total'] : null;
        $this->i_sessions_prorate = isset($data['i_sessions_prorate']) ? (int)$data['i_sessions_prorate'] : null;
        $this->i_sessions_total = isset($data['i_sessions_total']) ? (int)$data['i_sessions_total'] : null;
        $this->m_calculated = isset($data['m_calculated']) ? (string)$data['m_calculated'] : null;
    }
}
