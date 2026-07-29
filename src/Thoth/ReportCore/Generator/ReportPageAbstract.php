<?php

namespace WlSdk\Thoth\ReportCore\Generator;

/**
 * Base class for all report pages in the system.
 *
 * Values:
 * - 1873 (`Thoth\ProgressLog\Report\ProgressLogListReportPage`): "Progress Log" report page.
 *
 *   It is defined as a page rather than single report due to chart representation having multiple widgets depending on
 *   business configuration.
 * - 801 (`Thoth\Report\SalesReport\Transaction\TransactionAllReportPage`): "All transactions" report page.
 * - 1566 (`Thoth\Report\SalesReport\Closeout\SalesCloseoutReportPage`): "Sales and Attendance Summary" report page.
 * - 1043 (`Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryReportPage`): "Sales Summary By Location"
 * franchisee report page.
 * - 1562 (`Thoth\Report\SalesReport\Transaction\Batch\Summary\SummaryReportPage`): "Batch Reconciliation Summary"
 * report page.
 * - 1035 (`Thoth\Report\SalesReport\Franchise\Location\Detail\PurchaseFranchiseLocationReportPage`): "Sales Details by
 * Location" report page.
 * - 1040 (`Thoth\Report\SalesReport\Franchise\Location\Summary\PurchaseFranchiseLocationSummaryReportPage`): "Sales
 * Summary By Location" report page.
 */
class ReportPageAbstract
{
    /** "Progress Log" report page. */
    public const ProgressLogListReportPage = 1873;

    /** "All transactions" report page. */
    public const TransactionAllReportPage = 801;

    /** "Sales and Attendance Summary" report page. */
    public const SalesCloseoutReportPage = 1566;

    /** "Sales Summary By Location" franchisee report page. */
    public const PurchaseLocationSummaryReportPage = 1043;

    /** "Batch Reconciliation Summary" report page. */
    public const SummaryReportPage = 1562;

    /** "Sales Details by Location" report page. */
    public const PurchaseFranchiseLocationReportPage = 1035;

    /** "Sales Summary By Location" report page. */
    public const PurchaseFranchiseLocationSummaryReportPage = 1040;
}
