<?php

namespace WlSdk\Wl\Report\Dashboard\Menu;

class MenuPutRequest
{
    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Dashboard order list. Each key is primary key from RsReportDashboardSql and value is sort position.
     *
     * @var array|null
     */
    public ?array $a_dashboard_order = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_dashboard_order' => $this->a_dashboard_order,
            ],
            static fn ($v) => $v !== null
        );
    }
}
