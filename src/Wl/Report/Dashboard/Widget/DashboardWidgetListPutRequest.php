<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

class DashboardWidgetListPutRequest
{
    /**
     * List of widget keys in the order they should be displayed.
     *
     * Primary keys in the RsReportDashboardWidgetSql table.
     *
     * @var string[]|null
     */
    public ?array $a_report_dashboard_widget = null;

    /**
     * Business key.
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Dashboard key to update. Primary key in RsReportDashboardSql table.
     *
     * `null` if not specified.
     *
     * @var string|null
     */
    public ?string $k_report_dashboard = null;

    /**
     * User key.
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_report_dashboard_widget' => $this->a_report_dashboard_widget,
            'k_business' => $this->k_business,
            'k_report_dashboard' => $this->k_report_dashboard,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
