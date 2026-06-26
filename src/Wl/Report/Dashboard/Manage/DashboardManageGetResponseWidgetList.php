<?php

namespace WlSdk\Wl\Report\Dashboard\Manage;

class DashboardManageGetResponseWidgetList
{
    /**
     * Widget content identifier. Depending on `id_report_widget` may be one of {@link \WlSdk\RsReportSid},
     *  {@link \WlSdk\RsReportPageSid}, or primary key in RsReportSaveSql table.
     *
     * @var int|null
     */
    public ?int $i_report_widget = null;

    /**
     * Widget order on the dashboard.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

    /**
     * Widget type identifier. One of {@link \WlSdk\RsReportWidgetSid}.
     *
     * @var int|null
     * @see \WlSdk\RsReportWidgetSid
     */
    public ?int $id_report_widget = null;

    public function __construct(array $data)
    {
        $this->i_report_widget = isset($data['i_report_widget']) ? (int)$data['i_report_widget'] : null;
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->id_report_widget = isset($data['id_report_widget']) ? (int)$data['id_report_widget'] : null;
    }
}
