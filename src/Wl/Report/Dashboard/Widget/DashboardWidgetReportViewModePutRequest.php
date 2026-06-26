<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

class DashboardWidgetReportViewModePutRequest
{
    /**
     * Business key.
     *
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Widget key.
     *
     * Use [DashboardWidgetApi](/Wl/Report/Dashboard/Widget/DashboardWidget.json) to update collapse state of
     * multiple widgets.
     *
     * @var string|null
     */
    public ?string $k_report_dashboard_widget = null;

    /**
     * User key.
     *
     * Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Widget keys list for update collapse state.
     *
     * @var string[]|null
     */
    public ?array $a_report_dashboard_widget = null;

    /**
     * Whether report is in full view mode.
     *
     * @var bool|null
     */
    public ?bool $is_report_view_full = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_report_dashboard_widget' => $this->k_report_dashboard_widget,
            'uid' => $this->uid,
            'a_report_dashboard_widget' => $this->a_report_dashboard_widget,
            'is_report_view_full' => $this->is_report_view_full,
            ],
            static fn ($v) => $v !== null
        );
    }
}
