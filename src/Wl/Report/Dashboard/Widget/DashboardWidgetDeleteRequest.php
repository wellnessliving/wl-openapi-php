<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

class DashboardWidgetDeleteRequest
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
     * Use `a_report_dashboard_widget` to update collapse state of multiple widgets.
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_report_dashboard_widget' => $this->k_report_dashboard_widget,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
