<?php

namespace WlSdk\Wl\Report\Dashboard;

class DashboardGetRequest
{
    /**
     * Business key of the report. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Report dashboard key to which report should be added. Primary key in the RsReportDashboardSql table.
     *
     * @var string|null
     */
    public ?string $k_report_dashboard = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_report_dashboard' => $this->k_report_dashboard,
            ],
            static fn ($v) => $v !== null
        );
    }
}
