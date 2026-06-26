<?php

namespace WlSdk\Wl\Report\Dashboard\Widget;

class DashboardWidgetListGetResponseWidgetDefaultList
{
    /**
     * Widget content identifier. Depending on `id_report_widget` may be one of {@link \WlSdk\RsReportSid}, {@link
     * \WlSdk\RsReportPageSid}, or primary key in RsReportSaveSql table.
     *
     * @var int|null
     */
    public ?int $i_report_widget = null;

    /**
     * Widget order within its category.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

    /**
     * Widget type. One of {@link \WlSdk\RsReportWidgetSid} for details.
     *
     * @var int|null
     * @see \WlSdk\RsReportWidgetSid
     */
    public ?int $id_report_widget = null;

    /**
     * Unique key of the widget. Composite of `id_report_widget` and `i_report_widget`.
     *
     * @var string|null
     */
    public ?string $text_widget_key = null;

    public function __construct(array $data)
    {
        $this->i_report_widget = isset($data['i_report_widget']) ? (int)$data['i_report_widget'] : null;
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->id_report_widget = isset($data['id_report_widget']) ? (int)$data['id_report_widget'] : null;
        $this->text_widget_key = isset($data['text_widget_key']) ? (string)$data['text_widget_key'] : null;
    }
}
