<?php

namespace WlSdk\Wl\Report\Dashboard\Manage;

/**
 * Response from PUT
 */
class DashboardManagePutResponse
{
    /**
     * Dashboard key to read or update. Primary key in RsReportDashboardSql table.
     *
     * `null` if API is called to create a new dashboard.
     *
     * @var string|null
     */
    public ?string $k_report_dashboard = null;

    public function __construct(array $data)
    {
        $this->k_report_dashboard = isset($data['k_report_dashboard']) ? (string)$data['k_report_dashboard'] : null;
    }
}
