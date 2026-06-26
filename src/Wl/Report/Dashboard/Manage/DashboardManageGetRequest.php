<?php

namespace WlSdk\Wl\Report\Dashboard\Manage;

class DashboardManageGetRequest
{
    /**
     * Dashboard editing mode. One of {@link \WlSdk\Wl\Report\Dashboard\Panel\PanelModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Report\Dashboard\Panel\PanelModeSid
     */
    public ?int $id_mode = null;

    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Dashboard key to read or update. Primary key in RsReportDashboardSql table.
     *
     * `null` if API is called to create a new dashboard.
     *
     * @var string|null
     */
    public ?string $k_report_dashboard = null;

    /**
     * Key of the currently logged-in user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_report_dashboard' => $this->k_report_dashboard,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
