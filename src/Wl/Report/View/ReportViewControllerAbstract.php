<?php

namespace WlSdk\Wl\Report\View;

/**
 * Base class for report controllers.
 *
 * Values:
 * - 1848 (`Thoth\ProgressLog\Report\ProgressLogListReportPageChartController`): Progress Log (Transformation Log)
 * report view controller. Chart representation.
 * - 753 (`Wl\Member\Report\MemberAllReportChartController`): "All clients" report controller. Chart representation.
 * - 1304 (`Wl\Member\Report\MemberReportChartController`): "All clients" report controller (this report used for the
 * "Clients" link accessed from the top nav or WL menu).
 *   Chart representation.
 * - 803 (`Thoth\Report\SalesReport\Transaction\TransactionAllReportPageChartController`): "All transactions" report
 * page controller. Chart representation.
 * - 925 (`Thoth\ReportCore\Generator\Example\ExampleReportChartController`): "Example report" view controller. Chart
 * representation.
 * - 1452 (`Wl\Lead\Franchise\Report\LeadByLocationReportChartController`): "Lead by location" report page controller.
 * Chart representation.
 * - 1511 (`Wl\Login\Franchise\Detail\DetailListReportChartController`): "Enterprise Client Details" report controller.
 *   Chart representation.
 * - 1527 (`Wl\Attendance\Report\Appointment\DetailReportChartController`): Controls detailed appointment analysis
 * report in chart format.
 * - 1495 (`Thoth\Report\SalesReport\Franchise\Membership\MembershipDetailReportChartController`): "Enterprise Reports
 * -> Memberships Details by Location" report controller. Chart representation.
 * - 1270 (`Thoth\Report\SalesReport\Tag\Summary\ListReportChartController`): Controller for "Sales Summary by Revenue
 * Category" report. Chart view.
 * - 1047 (`Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryReportPageChartController`): Sales Summary
 * By Location report page, chart representation.
 * - 1481 (`Wl\Visit\Location\Cross\Summary\VisitLocationCrossDetailSummaryReportChartController`): "Cross-Location
 * Visit Summary" report controller. Chart representation.
 * - 1479 (`Wl\Visit\Franchise\Location\Cross\Summary\VisitFranchiseLocationCrossDetailSummaryReportChartController`):
 * Franchise "Cross-Location Visit Summary" report controller. Chart representation.
 * - 1476 (`Wl\Visit\Franchise\Location\Cross\Summary\VisitFranchiseeLocationCrossDetailSummaryReportChartController`):
 * Franchisee "Cross-Location Visit Summary" report controller. Chart representation.
 * - 1872 (`Thoth\ProgressLog\Report\ProgressLogListReportPageController`): Progress Log (Transformation Log) report
 * view controller. Table representation.
 * - 802 (`Thoth\Report\SalesReport\Transaction\TransactionAllReportPageController`): "All transactions" report page
 * controller. Table representation.
 * - 1567 (`Thoth\Report\SalesReport\Closeout\SalesCloseoutReportPageController`): "Sales and Attendance Summary"
 * report page controller.
 * - 1044 (`Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryReportPageController`): "Sales Summary By
 * Location" report page controller. Table representation.
 * - 1563 (`Thoth\Report\SalesReport\Transaction\Batch\Summary\SummaryReportPageController`): "Batch Reconciliation
 * Summary" report page controller. Table representation.
 * - 1036 (`Thoth\Report\SalesReport\Franchise\Location\Detail\PurchaseFranchiseLocationReportPageController`): "Sales
 * Details By Location" report page controller, table representation.
 * - 1039 (`Thoth\Report\SalesReport\Franchise\Location\Summary\PurchaseFranchiseLocationSummaryReportPageController`):
 * Controller for "Sales Summary By Location" corporate report page.
 * - 1855 (`Thoth\ProgressLog\Report\ProgressLogClientReportController`): Controller for "Transformation Log" report
 * that includes all clients.
 * - 1792 (`Wl\Lead\Report\LeadManagementReportController`): Controller for "Lead Management Report".
 * - 754 (`Wl\Member\Report\MemberAllReportController`): "All clients" report controller. Table representation.
 * - 1288 (`Wl\Member\Report\MemberReportController`): "All clients" report controller (this report used for the
 * "Clients" link accessed from the top nav or WL menu).
 *   Table representation.
 * - 1359 (`Wl\Login\Account\LoginAccountReportController`): Controller for "Balance Due Report".
 * - 1741 (`Wl\Visit\Report\VisitLifetimeReportController`): Controls list for "Lifetime Value & Visit Milestones"
 * report.
 * - 1555 (`Wl\Visit\Report\VisitBuySummaryReportController`): Controls list report for attendance.
 * - 1052 (`Wl\Appointment\Report\BookingFlowReportController`): "Appointment Booking Flow report" view controller.
 * Table representation.
 * - 1669 (`Wl\Purchase\Tip\PurchaseTipReportController`): Controller for "Tips Earned Details".
 * - 1272 (`Wl\Collector\Report\DebtReportController`): Controller for {@link
 * \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract} report.
 * - 1298 (`Wl\Collector\Report\TransactionCollectorReportController`): Controller for {@link
 * \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract} report.
 * - 1291 (`Wl\Collector\Report\TransactionReportController`): Controller for {@link
 * \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract} report.
 * - 1762 (`Thoth\MarketingCampaigns\Report\CampaignList\CampaignListReportController`): "Marketing Campaigns" list
 * report controller.
 * - 1778 (`Thoth\MarketingCampaigns\Report\CampaignDetail\CampaignDetailReportController`): "Marketing Campaigns"
 * detail report controller.
 * - 752 (`Thoth\Report\SalesReport\Transaction\TransactionAllItemReportController`): Controller of report "All
 * Transactions (item view)"
 * - 800 (`Thoth\Report\SalesReport\Transaction\TransactionAllPaymentReportController`): Controller of report "All
 * Transactions (payment view)"
 * - 1351 (`Thoth\Report\SalesReport\Transaction\TransactionFailReportController`): "Failed Transactions" report
 * controller. Table representation.
 * - 1322 (`Thoth\Report\SalesReport\Client\TransactionAllItemStaffClientReportController`): Controller of  client's
 * 'Purchases' report.
 * - 1256 (`Thoth\Report\SalesReport\Client\TransactionAllPaymentClientReportController`): Controller for report about
 * user's transactions.
 * - 1323 (`Thoth\Report\SalesReport\Client\TransactionAllPaymentStaffClientReportController`): Controller of client's
 * report "Transactions"
 * - 899 (`Thoth\Report\SalesReport\Product\ProductCostItemReportController`): "Cost of Goods Sold" report controller.
 * - 920 (`Thoth\ReportCore\Generator\Example\ExampleReportController`): "Example report" view controller. Table
 * representation.
 * - 2229 (`Thoth\ReportCore\QueryEngine\Report\ReportQueryReportController`): View controller for {@link
 * \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}.
 *
 *   Renders a registry-stored SQL report in table mode.
 * - 1453 (`Wl\Lead\Franchise\Report\LeadByLocationReportController`): "Lead by location" report page controller. Table
 * representation.
 * - 1698 (`Wl\Mail\History\Report\MailHistoryReportController`): "Email History" report controller.
 * - 1618 (`Wl\Login\Rank\Report\LoginRankReportController`): "Belts" report controller. Table representation.
 * - 1503 (`Wl\Login\Franchise\Detail\DetailListReportController`): Franchise client detail report controller.
 *   Table representation.
 * - 1386 (`Wl\Login\Franchise\Coupon\LoginFranchiseCouponReportController`): "Gift cards by location report" view
 * controller. Table representation.
 * - 1449 (`Wl\Login\Franchise\Status\StatusListReportController`): Controller for "Enterprise Status" report.
 * - 1752 (`Wl\Staff\Pay\Report\StaffPaySummaryReportController`): Controller for "Payroll Summary".
 * - 1745 (`Wl\Staff\Pay\Report\StaffPayDetailReportController`): Controller for "Payroll Details".
 * - 1629 (`Wl\Visit\Remain\Report\VisitRemainReportController`): "Visits Remaining" report page controller. Table
 * representation.
 * - 1607 (`Wl\Visit\Revenue\Report\VisitRevenueDetailReportController`): Controller for "Revenue by Service" report.
 * - 1604 (`Wl\Visit\Revenue\Report\VisitRevenueServiceReportController`): Controller for "Service Revenue Summary"
 * report.
 * - 1601 (`Wl\Visit\Revenue\Report\VisitRevenueServiceTypeReportController`): Controller for "Revenue by Service Type"
 * report.
 * - 1665 (`Wl\Purchase\Tip\Sum\PurchaseTipSumReportController`): Controller for "Tips Earned Summary".
 * - 1704 (`Wl\Franchise\Fee\Report\FeeLocationReportController`): "Royalties And Fees By Location" corporate report
 * page controller. Table representation.
 * - 2194 (`Wl\Sms\History\Report\SmsHistoryReportController`): "SMS History" report controller.
 * - 1521 (`Wl\Attendance\Report\Appointment\DetailReportController`): Controls detailed appointment analysis report in
 * list format.
 * - 1520 (`Wl\Attendance\Report\Appointment\SummaryReportController`): Controls appointment summary report in list
 * format.
 * - 1286 (`Thoth\Report\SalesReport\Transaction\Batch\BatchReportController`): Controller for "Batch Report".
 * - 1573 (`Thoth\Report\SalesReport\Transaction\Cash\SummaryReportController`): Controller for "Cash Reconciliation
 * Summary" report.
 * - 1447 (`Thoth\Report\SalesReport\Franchise\Membership\MembershipDetailReportController`): "Enterprise Reports ->
 * Memberships Details by Location" report controller. Table representation.
 * - 1499 (`Thoth\Report\SalesReport\Franchise\Membership\MembershipSummaryReportController`): Franchise "Memberships
 * Summary by Location" report controller. Table representation.
 * - 1296 (`Thoth\Report\SalesReport\Client\SummaryReport\SummaryReportController`): Controller for "Sales per Client"
 * report.
 * - 1907 (`Thoth\Report\SalesReport\Client\AccountReport\AccountHistoryReportController`): Controller for "Account
 * Balance History" report.
 * - 2224 (`Thoth\Report\SalesReport\Client\ClientStatementHistoryReport\ClientStatementHistoryReportController`):
 * Controller for "Statement History" report.
 * - 1397 (`Thoth\Report\SalesReport\PayMethod\SummaryReport\SummaryReportController`): Controller for "Sales Summary
 * by Payment Method" report.
 * - 1269 (`Thoth\Report\SalesReport\Tag\Summary\ListReportController`): Controller for "Sales Summary by Revenue
 * Category" report.
 * - 1263 (`Thoth\Report\SalesReport\Tag\Detail\ListRevenueReportController`): Controller for "Sales Details by Revenue
 * Category" report.
 * - 1030 (`Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryReportController`): Controller for "Sales
 * Summary By Location" franchisee report.
 * - 1265 (`Thoth\Report\SalesReport\PurchaseOption\Summary\SummaryReportController`): Controller for "Sales Summary by
 * Purchase Options" report.
 * - 1253 (`Thoth\WlPay\Transaction\StripeCom\PayoutReconciliation\PayoutReconciliationReportController`): "Stripe
 * Payout Reconciliation" report controller. Table representation.
 * - 1162 (`Wl\Business\Account\Revenue\Processing\RevenueProcessingReportController`): Controller for {@link
 * \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}.
 * - 2238 (`Wl\Business\Franchise\Location\Asset\LocationAssetReportController`): "Location Assets" franchise report
 * view controller. Table representation.
 * - 1454 (`Wl\Business\Franchise\Hours\ReportGeneration\BusinessHoursReportController`): "Business Hours" report
 * controller. Table representation.
 * - 2217 (`Wl\Login\Promotion\GuestPass\Report\GuestPassHistoryReportController`): Controller for the "Guest Pass
 * History" report shown on the client profile under Account.
 * - 1457 (`Wl\Visit\Location\Cross\Detail\VisitLocationCrossDetailReportController`): "Cross-Location Visit Details"
 * report controller. Table representation.
 * - 1482 (`Wl\Visit\Location\Cross\Summary\VisitLocationCrossDetailSummaryReportController`): "Cross-Location Visit
 * Summary" report controller. Table representation.
 * - 1728 (`Wl\Shop\Product\Inventory\Report\InventoryReportController`): "Inventory On Hand" report page controller.
 * Table representation.
 * - 1691 (`Wl\Contact\Member\History\Report\ContactHistoryClientReportController`): "Contact History" report
 * controller.
 * - 1667 (`Wl\Contact\Member\History\Report\ContactHistoryReportController`): "Contact History" report controller.
 * - 1558 (`Thoth\Report\SalesReport\Transaction\Batch\Summary\ApprovedReportController`): Controller for "Batch
 * Reconciliation Summary" (Approved) report.
 * - 1559 (`Thoth\Report\SalesReport\Transaction\Batch\Summary\SettledReportController`): Controller for "Batch
 * Reconciliation Summary" (Settled) report.
 * - 962 (`Thoth\Report\SalesReport\Franchise\Location\Detail\PurchaseFranchiseLocationReportController`): Controller
 * for "Sales Details by Location" corporate report. Table view.
 * - 1023 (`Thoth\Report\SalesReport\Franchise\Location\Summary\PurchaseFranchiseLocationSummaryReportController`):
 * Main controller for "Sales Summary By Location" report.
 * - 1276 (`Thoth\Report\SalesReport\Franchise\Sale\Compare\CompareListReportController`): Controller for "YOY Sales
 * Comparison" report.
 * - 1579 (`Thoth\Report\SalesReport\Closeout\Report\PurchaseOption\UsageReportController`): Controller for "Purchase
 * Option Usage Summary" report.
 * - 1473 (`Wl\Visit\Franchise\Location\Cross\Detail\VisitFranchiseLocationCrossDetailReportController`): Franchise
 * "Cross-Location Visit Details" report controller. Table representation.
 * - 1471 (`Wl\Visit\Franchise\Location\Cross\Detail\VisitFranchiseeLocationCrossDetailReportController`): Franchisee
 * "Cross-Location Visit Details" report controller. Table representation.
 * - 1478 (`Wl\Visit\Franchise\Location\Cross\Summary\VisitFranchiseLocationCrossDetailSummaryReportController`):
 * Franchise "Cross-Location Visit Summary" report controller. Table representation.
 * - 1475 (`Wl\Visit\Franchise\Location\Cross\Summary\VisitFranchiseeLocationCrossDetailSummaryReportController`):
 * Franchisee "Cross-Location Visit Summary" report controller. Table representation.
 * - 751 (`Wl\Member\Report\MemberAllReportTableController`): "All clients" report controller. Table representation.
 * - 1699 (`Wl\Mail\History\Report\MailHistoryReportTableController`): "Email History" report controller. Table
 * representation.
 * - 2195 (`Wl\Sms\History\Report\SmsHistoryReportTableController`): "SMS History" report controller. Table
 * representation.
 * - 1693 (`Wl\Contact\Member\History\Report\ContactHistoryClientReportTableController`): "Contact History" report
 * controller. Table representation.
 * - 1690 (`Wl\Contact\Member\History\Report\ContactHistoryReportTableController`): "Contact History" report
 * controller. Table representation.
 * - 841 (`Wl\Member\Report\MemberAllReportYoyController`): "All clients" report controller. Year-over-year chart
 * representation.
 * - 1305 (`Wl\Member\Report\MemberReportYoyController`): "All clients" report controller (this report used for the
 * "Clients" link accessed from the top nav or WL menu).
 *   Year-over-year chart representation.
 * - 845 (`Thoth\Report\SalesReport\Transaction\TransactionAllReportPageYoyController`): "All transactions" report page
 * controller. Year-over-year representation.
 * - 1462 (`Wl\Lead\Franchise\Report\LeadByLocationReportYoyController`): "Leads by location" report page controller.
 * Year-over-year representation.
 * - 1512 (`Wl\Login\Franchise\Detail\DetailListReportYoyController`): "Enterprise Client Details" report controller.
 *   Year-over-year chart representation.
 * - 1496 (`Thoth\Report\SalesReport\Franchise\Membership\MembershipDetailReportYoyController`): "Enterprise Reports ->
 * Memberships Details by Location" report controller. Year-over-year representation.
 * - 1048 (`Thoth\Report\SalesReport\Location\Summary\PurchaseLocationSummaryReportPageYoyController`): Sales Summary
 * By Location report page, year-over-year chart representation.
 */
class ReportViewControllerAbstract
{
    /** Progress Log (Transformation Log) report view controller. Chart representation. */
    public const ProgressLogListReportPageChartController = 1848;

    /** "All clients" report controller. Chart representation. */
    public const MemberAllReportChartController = 753;

    /** "All clients" report controller (this report used for the "Clients" link accessed from the top nav or WL menu). */
    public const MemberReportChartController = 1304;

    /** "All transactions" report page controller. Chart representation. */
    public const TransactionAllReportPageChartController = 803;

    /** "Example report" view controller. Chart representation. */
    public const ExampleReportChartController = 925;

    /** "Lead by location" report page controller. Chart representation. */
    public const LeadByLocationReportChartController = 1452;

    /** "Enterprise Client Details" report controller. */
    public const DetailListReportChartController = 1511;

    /** Controls detailed appointment analysis report in chart format. */
    public const DetailReportChartController = 1527;

    /** "Enterprise Reports -> Memberships Details by Location" report controller. Chart representation. */
    public const MembershipDetailReportChartController = 1495;

    /** Controller for "Sales Summary by Revenue Category" report. Chart view. */
    public const ListReportChartController = 1270;

    /** Sales Summary By Location report page, chart representation. */
    public const PurchaseLocationSummaryReportPageChartController = 1047;

    /** "Cross-Location Visit Summary" report controller. Chart representation. */
    public const VisitLocationCrossDetailSummaryReportChartController = 1481;

    /** Franchise "Cross-Location Visit Summary" report controller. Chart representation. */
    public const VisitFranchiseLocationCrossDetailSummaryReportChartController = 1479;

    /** Franchisee "Cross-Location Visit Summary" report controller. Chart representation. */
    public const VisitFranchiseeLocationCrossDetailSummaryReportChartController = 1476;

    /** Progress Log (Transformation Log) report view controller. Table representation. */
    public const ProgressLogListReportPageController = 1872;

    /** "All transactions" report page controller. Table representation. */
    public const TransactionAllReportPageController = 802;

    /** "Sales and Attendance Summary" report page controller. */
    public const SalesCloseoutReportPageController = 1567;

    /** "Sales Summary By Location" report page controller. Table representation. */
    public const PurchaseLocationSummaryReportPageController = 1044;

    /** "Batch Reconciliation Summary" report page controller. Table representation. */
    public const SummaryReportPageController = 1563;

    /** "Sales Details By Location" report page controller, table representation. */
    public const PurchaseFranchiseLocationReportPageController = 1036;

    /** Controller for "Sales Summary By Location" corporate report page. */
    public const PurchaseFranchiseLocationSummaryReportPageController = 1039;

    /** Controller for "Transformation Log" report that includes all clients. */
    public const ProgressLogClientReportController = 1855;

    /** Controller for "Lead Management Report". */
    public const LeadManagementReportController = 1792;

    /** "All clients" report controller. Table representation. */
    public const MemberAllReportController = 754;

    /** "All clients" report controller (this report used for the "Clients" link accessed from the top nav or WL menu). */
    public const MemberReportController = 1288;

    /** Controller for "Balance Due Report". */
    public const LoginAccountReportController = 1359;

    /** Controls list for "Lifetime Value & Visit Milestones" report. */
    public const VisitLifetimeReportController = 1741;

    /** Controls list report for attendance. */
    public const VisitBuySummaryReportController = 1555;

    /** "Appointment Booking Flow report" view controller. Table representation. */
    public const BookingFlowReportController = 1052;

    /** Controller for "Tips Earned Details". */
    public const PurchaseTipReportController = 1669;

    /** Controller for {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract} report. */
    public const DebtReportController = 1272;

    /** Controller for {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract} report. */
    public const TransactionCollectorReportController = 1298;

    /** Controller for {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract} report. */
    public const TransactionReportController = 1291;

    /** "Marketing Campaigns" list report controller. */
    public const CampaignListReportController = 1762;

    /** "Marketing Campaigns" detail report controller. */
    public const CampaignDetailReportController = 1778;

    /** Controller of report "All Transactions (item view)" */
    public const TransactionAllItemReportController = 752;

    /** Controller of report "All Transactions (payment view)" */
    public const TransactionAllPaymentReportController = 800;

    /** "Failed Transactions" report controller. Table representation. */
    public const TransactionFailReportController = 1351;

    /** Controller of  client's 'Purchases' report. */
    public const TransactionAllItemStaffClientReportController = 1322;

    /** Controller for report about user's transactions. */
    public const TransactionAllPaymentClientReportController = 1256;

    /** Controller of client's report "Transactions" */
    public const TransactionAllPaymentStaffClientReportController = 1323;

    /** "Cost of Goods Sold" report controller. */
    public const ProductCostItemReportController = 899;

    /** "Example report" view controller. Table representation. */
    public const ExampleReportController = 920;

    /** View controller for {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}. */
    public const ReportQueryReportController = 2229;

    /** "Lead by location" report page controller. Table representation. */
    public const LeadByLocationReportController = 1453;

    /** "Email History" report controller. */
    public const MailHistoryReportController = 1698;

    /** "Belts" report controller. Table representation. */
    public const LoginRankReportController = 1618;

    /** Franchise client detail report controller. */
    public const DetailListReportController = 1503;

    /** "Gift cards by location report" view controller. Table representation. */
    public const LoginFranchiseCouponReportController = 1386;

    /** Controller for "Enterprise Status" report. */
    public const StatusListReportController = 1449;

    /** Controller for "Payroll Summary". */
    public const StaffPaySummaryReportController = 1752;

    /** Controller for "Payroll Details". */
    public const StaffPayDetailReportController = 1745;

    /** "Visits Remaining" report page controller. Table representation. */
    public const VisitRemainReportController = 1629;

    /** Controller for "Revenue by Service" report. */
    public const VisitRevenueDetailReportController = 1607;

    /** Controller for "Service Revenue Summary" report. */
    public const VisitRevenueServiceReportController = 1604;

    /** Controller for "Revenue by Service Type" report. */
    public const VisitRevenueServiceTypeReportController = 1601;

    /** Controller for "Tips Earned Summary". */
    public const PurchaseTipSumReportController = 1665;

    /** "Royalties And Fees By Location" corporate report page controller. Table representation. */
    public const FeeLocationReportController = 1704;

    /** "SMS History" report controller. */
    public const SmsHistoryReportController = 2194;

    /** Controls detailed appointment analysis report in list format. */
    public const DetailReportController = 1521;

    /** Controls appointment summary report in list format. */
    public const Appointment_SummaryReportController = 1520;

    /** Controller for "Batch Report". */
    public const BatchReportController = 1286;

    /** Controller for "Cash Reconciliation Summary" report. */
    public const Cash_SummaryReportController = 1573;

    /** "Enterprise Reports -> Memberships Details by Location" report controller. Table representation. */
    public const MembershipDetailReportController = 1447;

    /** Franchise "Memberships Summary by Location" report controller. Table representation. */
    public const MembershipSummaryReportController = 1499;

    /** Controller for "Sales per Client" report. */
    public const Client_SummaryReport_SummaryReportController = 1296;

    /** Controller for "Account Balance History" report. */
    public const AccountHistoryReportController = 1907;

    /** Controller for "Statement History" report. */
    public const ClientStatementHistoryReportController = 2224;

    /** Controller for "Sales Summary by Payment Method" report. */
    public const PayMethod_SummaryReport_SummaryReportController = 1397;

    /** Controller for "Sales Summary by Revenue Category" report. */
    public const ListReportController = 1269;

    /** Controller for "Sales Details by Revenue Category" report. */
    public const ListRevenueReportController = 1263;

    /** Controller for "Sales Summary By Location" franchisee report. */
    public const PurchaseLocationSummaryReportController = 1030;

    /** Controller for "Sales Summary by Purchase Options" report. */
    public const Summary_SummaryReportController = 1265;

    /** "Stripe Payout Reconciliation" report controller. Table representation. */
    public const PayoutReconciliationReportController = 1253;

    /** Controller for {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}. */
    public const RevenueProcessingReportController = 1162;

    /** "Location Assets" franchise report view controller. Table representation. */
    public const LocationAssetReportController = 2238;

    /** "Business Hours" report controller. Table representation. */
    public const BusinessHoursReportController = 1454;

    /** Controller for the "Guest Pass History" report shown on the client profile under Account. */
    public const GuestPassHistoryReportController = 2217;

    /** "Cross-Location Visit Details" report controller. Table representation. */
    public const VisitLocationCrossDetailReportController = 1457;

    /** "Cross-Location Visit Summary" report controller. Table representation. */
    public const VisitLocationCrossDetailSummaryReportController = 1482;

    /** "Inventory On Hand" report page controller. Table representation. */
    public const InventoryReportController = 1728;

    /** "Contact History" report controller. */
    public const ContactHistoryClientReportController = 1691;

    /** "Contact History" report controller. */
    public const ContactHistoryReportController = 1667;

    /** Controller for "Batch Reconciliation Summary" (Approved) report. */
    public const ApprovedReportController = 1558;

    /** Controller for "Batch Reconciliation Summary" (Settled) report. */
    public const SettledReportController = 1559;

    /** Controller for "Sales Details by Location" corporate report. Table view. */
    public const PurchaseFranchiseLocationReportController = 962;

    /** Main controller for "Sales Summary By Location" report. */
    public const PurchaseFranchiseLocationSummaryReportController = 1023;

    /** Controller for "YOY Sales Comparison" report. */
    public const CompareListReportController = 1276;

    /** Controller for "Purchase Option Usage Summary" report. */
    public const UsageReportController = 1579;

    /** Franchise "Cross-Location Visit Details" report controller. Table representation. */
    public const VisitFranchiseLocationCrossDetailReportController = 1473;

    /** Franchisee "Cross-Location Visit Details" report controller. Table representation. */
    public const VisitFranchiseeLocationCrossDetailReportController = 1471;

    /** Franchise "Cross-Location Visit Summary" report controller. Table representation. */
    public const VisitFranchiseLocationCrossDetailSummaryReportController = 1478;

    /** Franchisee "Cross-Location Visit Summary" report controller. Table representation. */
    public const VisitFranchiseeLocationCrossDetailSummaryReportController = 1475;

    /** "All clients" report controller. Table representation. */
    public const MemberAllReportTableController = 751;

    /** "Email History" report controller. Table representation. */
    public const MailHistoryReportTableController = 1699;

    /** "SMS History" report controller. Table representation. */
    public const SmsHistoryReportTableController = 2195;

    /** "Contact History" report controller. Table representation. */
    public const ContactHistoryClientReportTableController = 1693;

    /** "Contact History" report controller. Table representation. */
    public const ContactHistoryReportTableController = 1690;

    /** "All clients" report controller. Year-over-year chart representation. */
    public const MemberAllReportYoyController = 841;

    /** "All clients" report controller (this report used for the "Clients" link accessed from the top nav or WL menu). */
    public const MemberReportYoyController = 1305;

    /** "All transactions" report page controller. Year-over-year representation. */
    public const TransactionAllReportPageYoyController = 845;

    /** "Leads by location" report page controller. Year-over-year representation. */
    public const LeadByLocationReportYoyController = 1462;

    /** "Enterprise Client Details" report controller. */
    public const DetailListReportYoyController = 1512;

    /** "Enterprise Reports -> Memberships Details by Location" report controller. Year-over-year representation. */
    public const MembershipDetailReportYoyController = 1496;

    /** Sales Summary By Location report page, year-over-year chart representation. */
    public const PurchaseLocationSummaryReportPageYoyController = 1048;
}
