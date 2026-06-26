<?php

namespace WlSdk\Wl\Report\Dashboard\Manage;

class DashboardManagePutRequest
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

    /**
     * Selected staff roles of the dashboard.
     *
     * `null` if list of staff roles doesn't need to be updated.
     *
     * @var array[]|null
     */
    public ?array $a_staff_role = null;

    /**
     * List of widgets that are displayed on the dashboard.
     *
     * `null` if list of widgets doesn't need to be updated.
     *
     * Structure of each item:
     *
     * @var array[]|null
     */
    public ?array $a_widget_list = null;

    /**
     * Dashboard sharing mode. One of {@link \WlSdk\Wl\Share\ShareSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Share\ShareSid
     */
    public ?int $id_share = null;

    /**
     * Dashboard title.
     *
     * `null` for read requests.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_report_dashboard' => $this->k_report_dashboard,
            'uid' => $this->uid,
            'a_staff_role' => $this->a_staff_role,
            'a_widget_list' => $this->a_widget_list,
            'id_share' => $this->id_share,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
