<?php
namespace WlSdk\Thoth\ReportCore\Generator;

/**
 * Base class for all reports in the system.
 * The main purpose of subclasses is to generate contents of the report.
 * 
 * This is an abstract class with two methods which should obligatorily be overridden in all subclasses:
 * [ReportGeneratorReportAbstract::generatorPartitions()
 * `generatorPartitions()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * and
 * [ReportGeneratorReportAbstract::generatorRun()
 * `generatorRun()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract).
 * 
 * [ReportGeneratorReportAbstract::generatorPartitions()
 * `generatorPartitions()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * returns array of strings. The string is ID of a report partition.
 * Partitions are entirely independent parts of the report which may be generated
 * concurrently. For this, for each partition,
 * [ReportGeneratorReportAbstract::generatorRun()
 * `generatorRun()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * is executed.
 * 
 * Purpose of
 * [ReportGeneratorReportAbstract::generatorRun()
 * `generatorRun()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * is to generate array of rows of a single partition of the report.
 * A row is represented by an object of a subclass of
 * ReportGeneratorRowAbstract `ReportGeneratorRowAbstract`.
 * Override
 * [ReportGeneratorReportAbstract::ROW_CLASS
 * `ROW_CLASS`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * to set class of the row that is used by this report. All rows returned by
 * [ReportGeneratorReportAbstract::generatorRun()
 * `generatorRun()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * must be of class specified by
 * [ReportGeneratorReportAbstract::ROW_CLASS
 * `ROW_CLASS`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract).
 * 
 * If your report contains dynamic columns or dynamic filters, you may want to override
 * [ReportGeneratorReportAbstract::generatorDynamic()
 * `generatorDynamic()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract).
 * 
 * New Report generation has pretty wide range of tools to control access.
 * The following three are the sources for checking the access:
 * 
 * * This class has a set of `ACCESS_*` constants.
 *   They all used for controlling of different aspects of access to the report.
 *   Review all the constants to understand their purpose and get familiar with what can be configured.
 *   Override these constants in subclasses as needed.
 * * You may want to override
 *   [ReportGeneratorReportAbstract::can()
 * can()](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 *   method if your report has some additional complex access checks.
 * * ReportFilterFieldAbstract::load() `ReportFilterFieldAbstract::load()`
 *   checks all the data that arrives in filters. Note that
 *   ReportFilterFieldAbstract::load() `ReportFilterFieldAbstract::load()`
 *   is not responsible for checking if current user has access to the filters.
 * * ReportFilterFieldAbstract::can() `ReportFilterFieldAbstract::can()`
 *   is called to make access checks.
 * 
 * You may want to review implementation of
 * [ReportGeneratorReportAbstract::canAll()
 * `canAll()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * to get familiar with how all access checks are performed.
 * 
 * When you create a report, you must define report filter.
 * Report filters are controlled by subclasses of
 * ReportFilterAbstract `ReportFilterAbstract`.
 * Override
 * [ReportGeneratorReportAbstract::FILTER_CLASS
 * `FILTER_CLASS`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * constant to set class of the filter that is used by this report.
 * 
 * Override
 * [ReportGeneratorReportAbstract::TITLE](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * to set title of the report.
 * You may also override
 * [ReportGeneratorReportAbstract::TITLE_CONTEXT](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * to specify additional context of the title.
 * 
 * All reports depend on the following:
 * 
 * * Business which information should be represented by the report is retrieved with
 *   [ReportGeneratorReportAbstract::businessGet()
 * `businessGet()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract).
 * * UID of the user that views the report should be retrieved with
 *   [ReportGeneratorReportAbstract::actorGet()
 * `actorGet()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract) method.
 * 
 *   Actor is a user that has requested the report.
 * * If your report contains date/time, use
 *   [ReportGeneratorReportAbstract::timezone()
 * `timezone()`](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 *   to get timezone in which the report should be built.
 * 
 *   In general, timezone of a report is defined by filter fields that implement
 *   ReportFilterFieldTimezoneInterface `ReportFilterFieldTimezoneInterface`.
 *   It is desirable that all filters have at least one filter field that implements this interface.
 *   If multiple filter fields implement this interface, they all MUST return the same timezone
 *   (assertion exception is thrown otherwise).
 * 
 *   If a report does not have any filter fields that implement this interface,
 *   timezone defined by deprecated BusinessTimezone is used.
 * 
 * See `namespace.Wl/Report/Generator/doc/compare-old-and-new-report-generation.md`
 * for comparison of main differences between old and new report generation.
 * 
 * See `namespace.Wl/Report/Generator/doc/how-to-create-a-report.md` for a step by step guide to create new report.
 * 
 * See `namespace.Wl/Report/Generator/doc/project.md` to see how we designed the new report generation.
 * 
 * During export, special formatting may be applied to individual columns.
 * See `namespace.Wl/Report/Generator/doc/report-export-format.md` for formatting during export.
 * 
 * See `namespace.Wl/Report/Customization/doc/introduction-to-report-customization.md`
 * for information about report customization.
 * 
 * See `namespace.Wl/Report/View/doc/documentation-content.md` for information about JS implementation.
 * 
 * Values:
 * - 1854 (`Thoth\ProgressLog\Report\ProgressLogClientReport`): "Transformation Log" report outside of client's
 * profile, listing the latest Progress Log entry (within a date range)
 *   for each client. Each row represents a unique client.
 * - 1849 (`Thoth\ProgressLog\Report\ProgressLogListReport`): Progress log list report.
 * - 799 (`Thoth\Report\SalesReport\Transaction\TransactionAllPaymentReport`): "All Transactions" report.
 * 
 *   This is a placeholder for now.
 * - 739 (`Thoth\Report\SalesReport\Transaction\TransactionAllItemReport`): "All Transactions" report / "All Sales"
 * report (item view).
 * - 1350 (`Thoth\Report\SalesReport\Transaction\TransactionFailReport`): "Failed Transactions" report.
 * - 1255 (`Thoth\Report\SalesReport\Client\TransactionAllPaymentClientReport`): Report about user's transactions.
 * - 1321 (`Thoth\Report\SalesReport\Client\TransactionAllPaymentStaffClientReport`): Report about client's
 * transactions.
 * - 1324 (`Thoth\Report\SalesReport\Client\TransactionAllItemStaffClientReport`): Client's 'Purchases' report.
 * - 900 (`Thoth\Report\SalesReport\Product\ProductCostItemReport`): "Cost of Goods Sold" report.
 * - 1763 (`Thoth\MarketingCampaigns\Report\CampaignList\CampaignListReport`): "Marketing Campaigns" list report.
 * - 1777 (`Thoth\MarketingCampaigns\Report\CampaignDetail\CampaignDetailReport`): "Marketing Campaigns" detail report.
 * - 919 (`Thoth\ReportCore\Generator\Example\ExampleReport`): Example report used to demonstrate report creation in
 * step by step guide.
 * 
 *   See `namespace.Wl/Report/Generator/doc/how-to-create-a-report.md`.
 * - 2226 (`Thoth\ReportCore\QueryEngine\Report\ReportQueryReport`): Executes a registry-stored SQL query and exposes
 * the result as a report.
 * 
 *   The SQL query is stored in the ReportQuerySql table and
 *    executed by ReportQueryExecutor.
 * 
 *   Column structure is mapped onto a fixed grid of slot properties (`s_col_1`..`s_col_50`) declared in
 *    ReportQueryReportRow. At runtime
 * [ReportQueryReport::fieldPrepare()](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * overrides
 *    each used slot's title, type and visibility based on the SELECT aliases; unused slots stay
 *    hidden.
 * [ReportQueryReport::generatorRun()](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * assigns SELECT result values to slot
 *    properties by SELECT order. See `doc/reference/slot-architecture.md` for the rationale.
 * 
 *   Partitions are delegated to the first table class in the FROM clause via
 *   
 * [ReportQueryTableAbstract::partitions()](#/components/schemas/Thoth.ReportCore.QueryEngine.ReportQueryTableAbstract).
 * 
 *   Set the query key before generation via
 * [ReportQueryReport::queryKeySet()](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract).
 * - 1050 (`Wl\Appointment\Report\BookingFlowReport`): Client Appointment Booking Flow report.
 * - 1740 (`Wl\Visit\Report\VisitLifetimeReport`): Controls list for "Lifetime Value & Visit Milestones" report.
 * - 1556 (`Wl\Visit\Report\VisitBuySummaryReport`): Controls list report for attendance.
 * - 1290 (`Wl\Collector\Report\TransactionReport`): Report with list of all debt payments.
 * - 1271 (`Wl\Collector\Report\DebtReport`): Report with list of debts that should be sent to third party service to
 * collect a debt by force.
 * - 1297 (`Wl\Collector\Report\TransactionCollectorReport`): Report with list of payments that were performed via
 * collections service.
 * - 1791 (`Wl\Lead\Report\LeadManagementReport`): "Lead Management Report".
 * - 1358 (`Wl\Login\Account\LoginAccountReport`): "Balance Due Report".
 *   List of clients with their accounts state.
 * - 1713 (`Wl\Purchase\Reconcile\ReconcileReport`): External reconciliation report for franchisee.
 *   Is developed as microservice. This class only provides access validation and URL generation.
 * - 1670 (`Wl\Purchase\Tip\PurchaseTipReport`): Report to show details of the earned tips by staff members who takes
 * tips.
 * - 1287 (`Wl\Member\Report\MemberReport`): "All clients" report generator (this report used for the "Clients" link
 * accessed from the top nav or WL menu).
 * - 689 (`Wl\Member\Report\MemberAllReport`): "All clients" report generator.
 * - 1283 (`Thoth\Report\SalesReport\Transaction\Batch\BatchReport`): "Batch Report".
 * 
 *   Report by transactions that are bathing.
 *   Batching is a process when all transactions are sent to processing by merchant in a certain time of next day.
 * - 1572 (`Thoth\Report\SalesReport\Transaction\Cash\SummaryReport`): "Cash Reconciliation Summary" report.
 *   This report is only accessible as a part of "Sales and Attendance Summary" report.
 * - 1295 (`Thoth\Report\SalesReport\Client\SummaryReport\SummaryReport`): "Sales Summary by Client" report.
 * - 1908 (`Thoth\Report\SalesReport\Client\AccountReport\AccountHistoryReport`): "Account Balance History" report.
 * - 2223 (`Thoth\Report\SalesReport\Client\ClientStatementHistoryReport\ClientStatementHistoryReport`): "Statement
 * History" report.
 * 
 *   Lists account statements generated for a client, stored in
 *   ClientStatementSql.
 * - 1398 (`Thoth\Report\SalesReport\PayMethod\SummaryReport\SummaryReport`): "Sales Summary by Payment Method" report.
 * - 1448 (`Thoth\Report\SalesReport\Franchise\Membership\MembershipDetailReport`): "Enterprise Reports -&gt;
 * Memberships Details by Location" report. Detailed list of all memberships in the franchise.
 * - 1498 (`Thoth\Report\SalesReport\Franchise\Membership\MembershipSummaryReport`): Franchise "Memberships Summary by
 * Location" report.
 * - 1268 (`Thoth\Report\SalesReport\Tag\Summary\ListReport`): "Sales Summary by Revenue Category" report.
 * - 1262 (`Thoth\Report\SalesReport\Tag\Detail\ListRevenueReport`): "Sales Details by Revenue Category" report.
 * - 1042 (`Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryPaymentReport`): Generator class for
 * "Sales Summary By Location" report (payment view).
 * - 1031 (`Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryReport`): Generator class for "Sales
 * Summary By Location" report (item view).
 * - 1216 (`Thoth\Report\SalesReport\Integration\Autymate\AutymateTransactionAllItemReport`): Autymate extension of the
 * "All Transactions" report.
 *   The Autymate user is able to access the "All Transactions" report, but only for the businesses they have an
 * agreement with.
 * - 1264 (`Thoth\Report\SalesReport\PurchaseOption\Summary\SummaryReport`): "Sales Summary by Purchase Options"
 * report.
 * - 1254 (`Thoth\WlPay\Transaction\StripeCom\PayoutReconciliation\PayoutReconciliationReport`): "Stripe Payout
 * Reconciliation" report.
 * - 1628 (`Wl\Visit\Remain\Report\VisitRemainReport`): "Visits Remaining" report.
 * - 1602 (`Wl\Visit\Revenue\Report\VisitRevenueServiceTypeReport`): "Revenue by Service Type" report.
 * - 1603 (`Wl\Visit\Revenue\Report\VisitRevenueServiceReport`): "Service Revenue Summary" report.
 * - 1608 (`Wl\Visit\Revenue\Report\VisitRevenueDetailReport`): "Revenue by Service" report.
 * - 1705 (`Wl\Franchise\Fee\Report\FeeLocationReport`): "Royalties And Fees By Location" corporate report.
 * - 1451 (`Wl\Lead\Franchise\Report\LeadByLocationReport`): "Leads by location" report.
 * - 1619 (`Wl\Login\Rank\Report\LoginRankReport`): "Belts" report.
 * - 1504 (`Wl\Login\Franchise\Detail\DetailListReport`): Franchise client detail report generator.
 * - 1385 (`Wl\Login\Franchise\Coupon\LoginFranchiseCouponReport`): "All Transactions" report.
 * - 1450 (`Wl\Login\Franchise\Status\StatusListReport`): Franchise client status report.
 * - 1697 (`Wl\Mail\History\Report\MailHistoryReport`): "Email History" report.
 * - 1684 (`Wl\Purchase\Tip\FilterLimiter\FilterLimiterReport`): Supporting report which used for purchase tip filter
 * limiter.
 * - 1666 (`Wl\Purchase\Tip\Sum\PurchaseTipSumReport`): Report to show sum of the earned tips by staff members.
 * - 2193 (`Wl\Sms\History\Report\SmsHistoryReport`): "SMS History" report.
 * - 1744 (`Wl\Staff\Pay\Report\StaffPayDetailReport`): Report to show detailed list of instructor's classes and
 * payments for these classes.
 * - 1751 (`Wl\Staff\Pay\Report\StaffPaySummaryReport`): "Payroll Summary" report.
 * - 1971 (`Wl\Staff\Pay\Report\StaffPayDetailWithUpcomingReport`): Special version of the report to calculate upcoming
 * visits revenue.
 * - 1523 (`Wl\Attendance\Report\Appointment\SummaryReport`): Controls appointment summary report in list format.
 * - 1522 (`Wl\Attendance\Report\Appointment\DetailReport`): Controls detailed appointment analysis report in list
 * format.
 * - 1557 (`Thoth\Report\SalesReport\Transaction\Batch\Summary\ApprovedReport`): "Batch Reconciliation Summary"
 * (Approved) report.
 * - 1560 (`Thoth\Report\SalesReport\Transaction\Batch\Summary\SettledReport`): "Batch Reconciliation Summary"
 * (Settled) report.
 * - 1580 (`Thoth\Report\SalesReport\Closeout\Report\PurchaseOption\UsageReport`): "Purchase Option Usage Summary"
 * report.
 * - 961 (`Thoth\Report\SalesReport\Franchise\Location\Detail\PurchaseFranchiseLocationReport`): Generates data for
 * "Sales Details By Location" corporate report.
 * - 1034 (`Thoth\Report\SalesReport\Franchise\Location\Detail\PurchaseFranchiseLocationPaymentReport`): Generates data
 * for "Sales Details By Location" corporate report.
 * - 1041 (`Thoth\Report\SalesReport\Franchise\Location\Summary\PurchaseFranchiseLocationSummaryPaymentReport`):
 * Generates data for "Sales Summary By Location" corporate report - version of
 *  
 * [PurchaseFranchiseLocationPaymentReport](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 * with sales summed up by location.
 * 
 *   While intuitively summary should be same regardless of whether it was calculated from rows grouped by purchase
 * items
 *   or transactions, it may actually differ due to difference in how data for them is filtered. E.g. transaction is
 *   counted whole even if not all items within its purchase match selected filters in payment view, and in reverse
 *   purchase item's price is counted is full even though not all transactions it was paid with match the payment
 * methods
 *   filter.
 * - 1025 (`Thoth\Report\SalesReport\Franchise\Location\Summary\PurchaseFranchiseLocationSummaryReport`): Generates
 * data for "Sales Summary By Location" corporate report - version of
 * [PurchaseFranchiseLocationReport](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract)
 *   with sales summed up by location.
 * - 1274 (`Thoth\Report\SalesReport\Franchise\Sale\Compare\CompareListReport`): "YOY Sales Comparison" report.
 * - 1456 (`Wl\Visit\Location\Cross\Detail\VisitLocationCrossDetailReport`): "Cross-Location Visit Details" report.
 * - 1480 (`Wl\Visit\Location\Cross\Summary\VisitLocationCrossDetailSummaryReport`): "Cross-Location Visit Summary"
 * report.
 * - 1161 (`Wl\Business\Account\Revenue\Processing\RevenueProcessingReport`): Report with total processing amounts by
 * customers.
 * 
 *   Only payments through credit cards and bank accounts are counted in this report.
 * - 2237 (`Wl\Business\Franchise\Location\Asset\LocationAssetReport`): "Location Assets" franchise report.
 * 
 *   Lists off-site location resources across all franchise member businesses.
 * - 1455 (`Wl\Business\Franchise\Hours\ReportGeneration\BusinessHoursReport`):
 * Wl\Business\Franchise\Hours\ReportGeneration\BusinessHoursReport
 * - 2218 (`Wl\Login\Promotion\GuestPass\Report\GuestPassHistoryReport`): "Guest Pass History" report shown on the
 * client profile under Account.
 * 
 *   Each row represents a single guest pass invite: either sent by the profile owner (host)
 *   or received by the profile owner as a guest. The row reflects the current real-time state of
 *   that invite - sent, expired, or the underlying visit's status if the guest has used the pass.
 * - 930 (`Wl\Purchase\Item\Report\FilterLimiter\FilterLimiterReport`): Supporting report which used for filter
 * limiter.
 * - 1261 (`Wl\Purchase\Item\Report\FilterLimiterClient\FilterLimiterReport`): Supporting report which used for filter
 * limiter of client reports.
 * - 1748 (`Wl\Staff\Pay\Report\StaffMemberLimiter\FilterLimiterReport`): Supporting report which used for payroll
 * details filter limiter.
 * - 1668 (`Wl\Contact\Member\History\Report\ContactHistoryReport`): "Contact History" report.
 * - 1692 (`Wl\Contact\Member\History\Report\ContactHistoryClientReport`): "Contact History" report for the specified
 * client.
 * - 1727 (`Wl\Shop\Product\Inventory\Report\InventoryReport`): "Inventory On Hand" report.
 * - 1472 (`Wl\Visit\Franchise\Location\Cross\Detail\VisitFranchiseLocationCrossDetailReport`): Franchise
 * "Cross-Location Visit Details" report.
 * - 1470 (`Wl\Visit\Franchise\Location\Cross\Detail\VisitFranchiseeLocationCrossDetailReport`): Franchisee
 * "Cross-Location Visit Details" report.
 * - 1477 (`Wl\Visit\Franchise\Location\Cross\Summary\VisitFranchiseLocationCrossDetailSummaryReport`): Franchise
 * "Cross-Location Visit Summary" report.
 * - 1474 (`Wl\Visit\Franchise\Location\Cross\Summary\VisitFranchiseeLocationCrossDetailSummaryReport`): Franchisee
 * "Cross-Location Visit Summary" report.
 */
class ReportGeneratorReportAbstract
{
    /** "Transformation Log" report outside of client's profile, listing the latest Progress Log entry (within a date range) */
    const Thoth\ProgressLog\Report\ProgressLogClientReport = 1854;
    /** Progress log list report. */
    const Thoth\ProgressLog\Report\ProgressLogListReport = 1849;
    /** "All Transactions" report. */
    const Thoth\Report\SalesReport\Transaction\TransactionAllPaymentReport = 799;
    /** "All Transactions" report / "All Sales" report (item view). */
    const Thoth\Report\SalesReport\Transaction\TransactionAllItemReport = 739;
    /** "Failed Transactions" report. */
    const Thoth\Report\SalesReport\Transaction\TransactionFailReport = 1350;
    /** Report about user's transactions. */
    const Thoth\Report\SalesReport\Client\TransactionAllPaymentClientReport = 1255;
    /** Report about client's transactions. */
    const Thoth\Report\SalesReport\Client\TransactionAllPaymentStaffClientReport = 1321;
    /** Client's 'Purchases' report. */
    const Thoth\Report\SalesReport\Client\TransactionAllItemStaffClientReport = 1324;
    /** "Cost of Goods Sold" report. */
    const Thoth\Report\SalesReport\Product\ProductCostItemReport = 900;
    /** "Marketing Campaigns" list report. */
    const Thoth\MarketingCampaigns\Report\CampaignList\CampaignListReport = 1763;
    /** "Marketing Campaigns" detail report. */
    const Thoth\MarketingCampaigns\Report\CampaignDetail\CampaignDetailReport = 1777;
    /** Example report used to demonstrate report creation in step by step guide. */
    const Thoth\ReportCore\Generator\Example\ExampleReport = 919;
    /** Executes a registry-stored SQL query and exposes the result as a report. */
    const Thoth\ReportCore\QueryEngine\Report\ReportQueryReport = 2226;
    /** Client Appointment Booking Flow report. */
    const Wl\Appointment\Report\BookingFlowReport = 1050;
    /** Controls list for "Lifetime Value & Visit Milestones" report. */
    const Wl\Visit\Report\VisitLifetimeReport = 1740;
    /** Controls list report for attendance. */
    const Wl\Visit\Report\VisitBuySummaryReport = 1556;
    /** Report with list of all debt payments. */
    const Wl\Collector\Report\TransactionReport = 1290;
    /** Report with list of debts that should be sent to third party service to collect a debt by force. */
    const Wl\Collector\Report\DebtReport = 1271;
    /** Report with list of payments that were performed via collections service. */
    const Wl\Collector\Report\TransactionCollectorReport = 1297;
    /** "Lead Management Report". */
    const Wl\Lead\Report\LeadManagementReport = 1791;
    /** "Balance Due Report". */
    const Wl\Login\Account\LoginAccountReport = 1358;
    /** External reconciliation report for franchisee. */
    const Wl\Purchase\Reconcile\ReconcileReport = 1713;
    /** Report to show details of the earned tips by staff members who takes tips. */
    const Wl\Purchase\Tip\PurchaseTipReport = 1670;
    /** "All clients" report generator (this report used for the "Clients" link accessed from the top nav or WL menu). */
    const Wl\Member\Report\MemberReport = 1287;
    /** "All clients" report generator. */
    const Wl\Member\Report\MemberAllReport = 689;
    /** "Batch Report". */
    const Thoth\Report\SalesReport\Transaction\Batch\BatchReport = 1283;
    /** "Cash Reconciliation Summary" report. */
    const Thoth\Report\SalesReport\Transaction\Cash\SummaryReport = 1572;
    /** "Sales Summary by Client" report. */
    const Thoth\Report\SalesReport\Client\SummaryReport\SummaryReport = 1295;
    /** "Account Balance History" report. */
    const Thoth\Report\SalesReport\Client\AccountReport\AccountHistoryReport = 1908;
    /** "Statement History" report. */
    const Thoth\Report\SalesReport\Client\ClientStatementHistoryReport\ClientStatementHistoryReport = 2223;
    /** "Sales Summary by Payment Method" report. */
    const Thoth\Report\SalesReport\PayMethod\SummaryReport\SummaryReport = 1398;
    /** "Enterprise Reports -&gt; Memberships Details by Location" report. Detailed list of all memberships in the franchise. */
    const Thoth\Report\SalesReport\Franchise\Membership\MembershipDetailReport = 1448;
    /** Franchise "Memberships Summary by Location" report. */
    const Thoth\Report\SalesReport\Franchise\Membership\MembershipSummaryReport = 1498;
    /** "Sales Summary by Revenue Category" report. */
    const Thoth\Report\SalesReport\Tag\Summary\ListReport = 1268;
    /** "Sales Details by Revenue Category" report. */
    const Thoth\Report\SalesReport\Tag\Detail\ListRevenueReport = 1262;
    /** Generator class for "Sales Summary By Location" report (payment view). */
    const Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryPaymentReport = 1042;
    /** Generator class for "Sales Summary By Location" report (item view). */
    const Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryReport = 1031;
    /** Autymate extension of the "All Transactions" report. */
    const Thoth\Report\SalesReport\Integration\Autymate\AutymateTransactionAllItemReport = 1216;
    /** "Sales Summary by Purchase Options" report. */
    const Thoth\Report\SalesReport\PurchaseOption\Summary\SummaryReport = 1264;
    /** "Stripe Payout Reconciliation" report. */
    const Thoth\WlPay\Transaction\StripeCom\PayoutReconciliation\PayoutReconciliationReport = 1254;
    /** "Visits Remaining" report. */
    const Wl\Visit\Remain\Report\VisitRemainReport = 1628;
    /** "Revenue by Service Type" report. */
    const Wl\Visit\Revenue\Report\VisitRevenueServiceTypeReport = 1602;
    /** "Service Revenue Summary" report. */
    const Wl\Visit\Revenue\Report\VisitRevenueServiceReport = 1603;
    /** "Revenue by Service" report. */
    const Wl\Visit\Revenue\Report\VisitRevenueDetailReport = 1608;
    /** "Royalties And Fees By Location" corporate report. */
    const Wl\Franchise\Fee\Report\FeeLocationReport = 1705;
    /** "Leads by location" report. */
    const Wl\Lead\Franchise\Report\LeadByLocationReport = 1451;
    /** "Belts" report. */
    const Wl\Login\Rank\Report\LoginRankReport = 1619;
    /** Franchise client detail report generator. */
    const Wl\Login\Franchise\Detail\DetailListReport = 1504;
    /** "All Transactions" report. */
    const Wl\Login\Franchise\Coupon\LoginFranchiseCouponReport = 1385;
    /** Franchise client status report. */
    const Wl\Login\Franchise\Status\StatusListReport = 1450;
    /** "Email History" report. */
    const Wl\Mail\History\Report\MailHistoryReport = 1697;
    /** Supporting report which used for purchase tip filter limiter. */
    const Wl\Purchase\Tip\FilterLimiter\FilterLimiterReport = 1684;
    /** Report to show sum of the earned tips by staff members. */
    const Wl\Purchase\Tip\Sum\PurchaseTipSumReport = 1666;
    /** "SMS History" report. */
    const Wl\Sms\History\Report\SmsHistoryReport = 2193;
    /** Report to show detailed list of instructor's classes and payments for these classes. */
    const Wl\Staff\Pay\Report\StaffPayDetailReport = 1744;
    /** "Payroll Summary" report. */
    const Wl\Staff\Pay\Report\StaffPaySummaryReport = 1751;
    /** Special version of the report to calculate upcoming visits revenue. */
    const Wl\Staff\Pay\Report\StaffPayDetailWithUpcomingReport = 1971;
    /** Controls appointment summary report in list format. */
    const Wl\Attendance\Report\Appointment\SummaryReport = 1523;
    /** Controls detailed appointment analysis report in list format. */
    const Wl\Attendance\Report\Appointment\DetailReport = 1522;
    /** "Batch Reconciliation Summary" (Approved) report. */
    const Thoth\Report\SalesReport\Transaction\Batch\Summary\ApprovedReport = 1557;
    /** "Batch Reconciliation Summary" (Settled) report. */
    const Thoth\Report\SalesReport\Transaction\Batch\Summary\SettledReport = 1560;
    /** "Purchase Option Usage Summary" report. */
    const Thoth\Report\SalesReport\Closeout\Report\PurchaseOption\UsageReport = 1580;
    /** Generates data for "Sales Details By Location" corporate report. */
    const Thoth\Report\SalesReport\Franchise\Location\Detail\PurchaseFranchiseLocationReport = 961;
    /** Generates data for "Sales Details By Location" corporate report. */
    const Thoth\Report\SalesReport\Franchise\Location\Detail\PurchaseFranchiseLocationPaymentReport = 1034;
    /** Generates data for "Sales Summary By Location" corporate report - version of */
    const Thoth\Report\SalesReport\Franchise\Location\Summary\PurchaseFranchiseLocationSummaryPaymentReport = 1041;
    /** Generates data for "Sales Summary By Location" corporate report - version of [PurchaseFranchiseLocationReport](#/components/schemas/Thoth.ReportCore.Generator.ReportGeneratorReportAbstract) */
    const Thoth\Report\SalesReport\Franchise\Location\Summary\PurchaseFranchiseLocationSummaryReport = 1025;
    /** "YOY Sales Comparison" report. */
    const Thoth\Report\SalesReport\Franchise\Sale\Compare\CompareListReport = 1274;
    /** "Cross-Location Visit Details" report. */
    const Wl\Visit\Location\Cross\Detail\VisitLocationCrossDetailReport = 1456;
    /** "Cross-Location Visit Summary" report. */
    const Wl\Visit\Location\Cross\Summary\VisitLocationCrossDetailSummaryReport = 1480;
    /** Report with total processing amounts by customers. */
    const Wl\Business\Account\Revenue\Processing\RevenueProcessingReport = 1161;
    /** "Location Assets" franchise report. */
    const Wl\Business\Franchise\Location\Asset\LocationAssetReport = 2237;
    /** Wl\Business\Franchise\Hours\ReportGeneration\BusinessHoursReport */
    const Wl\Business\Franchise\Hours\ReportGeneration\BusinessHoursReport = 1455;
    /** "Guest Pass History" report shown on the client profile under Account. */
    const Wl\Login\Promotion\GuestPass\Report\GuestPassHistoryReport = 2218;
    /** Supporting report which used for filter limiter. */
    const Wl\Purchase\Item\Report\FilterLimiter\FilterLimiterReport = 930;
    /** Supporting report which used for filter limiter of client reports. */
    const Wl\Purchase\Item\Report\FilterLimiterClient\FilterLimiterReport = 1261;
    /** Supporting report which used for payroll details filter limiter. */
    const Wl\Staff\Pay\Report\StaffMemberLimiter\FilterLimiterReport = 1748;
    /** "Contact History" report. */
    const Wl\Contact\Member\History\Report\ContactHistoryReport = 1668;
    /** "Contact History" report for the specified client. */
    const Wl\Contact\Member\History\Report\ContactHistoryClientReport = 1692;
    /** "Inventory On Hand" report. */
    const Wl\Shop\Product\Inventory\Report\InventoryReport = 1727;
    /** Franchise "Cross-Location Visit Details" report. */
    const Wl\Visit\Franchise\Location\Cross\Detail\VisitFranchiseLocationCrossDetailReport = 1472;
    /** Franchisee "Cross-Location Visit Details" report. */
    const Wl\Visit\Franchise\Location\Cross\Detail\VisitFranchiseeLocationCrossDetailReport = 1470;
    /** Franchise "Cross-Location Visit Summary" report. */
    const Wl\Visit\Franchise\Location\Cross\Summary\VisitFranchiseLocationCrossDetailSummaryReport = 1477;
    /** Franchisee "Cross-Location Visit Summary" report. */
    const Wl\Visit\Franchise\Location\Cross\Summary\VisitFranchiseeLocationCrossDetailSummaryReport = 1474;
}
