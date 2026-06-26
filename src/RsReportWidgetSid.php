<?php

namespace WlSdk;

/**
 * Report widgets.
 *
 * Values:
 * - 4 (`DYNAMIC`): A dynamic collection of reports.
 *
 *   `rs_report_dashboard_widget.i_report_widget` contains `k_dynamic_collection` - primary key
 *   from DynamicCollectionSql table.
 * - 6 (`GENERATOR_REPORT_SAVE`): Report controllers of the new report generation.
 *   Subclasses of [ReportViewControllerAbstract](#/components/schemas/Wl.Report.View.ReportViewControllerAbstract) and
 * saved by user.
 *
 *   `rs_report_dashboard_widget.i_report_widget` contains `k_report_save`.
 * - 5 (`GENERATOR_REPORT_SYSTEM`): Report controllers of the new report generation.
 *   Subclasses of [ReportViewControllerAbstract](#/components/schemas/Wl.Report.View.ReportViewControllerAbstract) and
 * saved by user.
 *
 *   `rs_report_dashboard_widget.i_report_widget` contains `cid_controller`.
 * - 3 (`PAGE`): A predefined collection of reports.
 *
 *   `rs_report_dashboard_widget.i_report_widget` contains `id_report_page` - one of
 * [RsReportPageSid](#/components/schemas/RsReportPageSid)
 *   constants.
 * - 2 (`SAVE`): Saved reports.
 *
 *   `rs_report_dashboard_widget.i_report_widget` contains `k_report_save`.
 * - 1 (`SYSTEM`): System individual reports.
 *
 *   `rs_report_dashboard_widget.i_report_widget` contains `id_report` - one of
 * [RsReportSid](#/components/schemas/RsReportSid) constants.
 */
class RsReportWidgetSid
{
    /** A dynamic collection of reports. */
    public const DYNAMIC = 4;

    /** Report controllers of the new report generation. */
    public const GENERATOR_REPORT_SAVE = 6;

    /** Report controllers of the new report generation. */
    public const GENERATOR_REPORT_SYSTEM = 5;

    /** A predefined collection of reports. */
    public const PAGE = 3;

    /** Saved reports. */
    public const SAVE = 2;

    /** System individual reports. */
    public const SYSTEM = 1;
}
