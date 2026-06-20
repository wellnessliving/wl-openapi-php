<?php
namespace WlSdk;

/**
 * A list of reports.
 * 
 * Do not add new reports here. Use New Report Generation instead.
 * 
 * 
 * 
 * Last used ID: 268. -- See comments above.
 * 
 * Values:
 * - 163 (`APPOINTMENT_CANCEL`): Report with list of canceled appointments.
 * - 54 (`APPOINTMENT_REQUEST`): Report with list of requested appointments.
 * - 55 (`APPOINTMENT_REQUEST_SHORT`): Report with list of requested appointments.
 *   Short version for the dashboard.
 * - 204 (`BOOK_METRIC_CHART`): Booking metric.
 * - 117 (`BUSINESS_ACCOUNT_APPLICATION`): Report about revenue for application.
 * - 135 (`BUSINESS_ACCOUNT_APPLICATION_ANNUAL`): Report with the list of 'Annual Application Fees' transactions.
 * - 221 (`BUSINESS_ACCOUNT_APPLICATION_NEW`): Report about first paid application subscription.
 * - 81 (`BUSINESS_ACCOUNT_CHURN`): Report with the list of customers lost during the period.
 * - 237 (`BUSINESS_ACCOUNT_COUPON`): Gift card usages.
 * - 84 (`BUSINESS_ACCOUNT_CUSTOMER`): The number of WellnessLiving customers.
 * - 85 (`BUSINESS_ACCOUNT_CUSTOMER_BEGIN`): The number of WellnessLiving customers during the selected period.
 * - 244 (`BUSINESS_ACCOUNT_CUSTOMER_LOCATION`): The list of all locations from WellnessLiving customers during the
 * selected period including
 *   locations, which are not customers and businesses, which are in a migration process.
 * - 105 (`BUSINESS_ACCOUNT_DEBT`): Report with the list of customers that has failed payments.
 * - 248 (`BUSINESS_ACCOUNT_LOG`): Report with list of changes to business account settings.
 * - 267 (`BUSINESS_ACCOUNT_LOG_ALL`): Report with list of changes to business account settings.
 * - 227 (`BUSINESS_ACCOUNT_REVENUE`): Report with the list of all payments from businesses to Wellnessliving Inc.
 * - 222 (`BUSINESS_ACCOUNT_REVENUE_SUBSCRIPTION`): Report with the list of all subscription payments.
 * - 236 (`BUSINESS_ACCOUNT_REVENUE_TAX`): Report with taxes of all payments from businesses.
 * - 251 (`BUSINESS_ACCOUNT_SCHEDULE_PREVIOUS`): Report with list of previous payments for business account.
 * - 252 (`BUSINESS_ACCOUNT_SCHEDULE_UPCOMING`): Report with list of future payments for business account.
 * - 98 (`BUSINESS_ACCOUNT_SKIP`): Skipped customers (who skipped business subscription payment).
 * - 254 (`BUSINESS_ACCOUNT_SUBSCRIPTION`): Report with business subscription information.
 * - 256 (`BUSINESS_ACCOUNT_SUBSCRIPTION_CHURN`): Report with business subscription information for churned businesses.
 * - 100 (`BUSINESS_ACCOUNT_TRANSACTION_ANNUAL`): Report with the list of 'Annual merchant processing fees' and 'Annual
 * PCI fees' transactions.
 * - 88 (`BUSINESS_ACCOUNT_TRANSACTION_BONUS`): Report with the list of bonus transactions.
 * - 114 (`BUSINESS_ACCOUNT_TRANSACTION_BONUS_DIRECT`): Report with the list of 'Direct Connect Bonuses' transactions.
 * - 87 (`BUSINESS_ACCOUNT_TRANSACTION_FAIL`): Report with the list of failed transactions.
 * - 95 (`BUSINESS_ACCOUNT_TRANSACTION_MERCHANT_REVENUE`): Report with the list of 'Optimal Merchant' transactions.
 * - 89 (`BUSINESS_ACCOUNT_TRANSACTION_NMI`): Report with the list of 'NMI' transactions.
 * - 107 (`BUSINESS_ALL`): Report with the list of all businesses.
 * - 208 (`BUSINESS_APPLICATION_METRIC_CHART`): Achieve clients metric.
 * - 90 (`BUSINESS_CHARGE_APPROVAL`): Report with the list of 'MP Approval Fee' transactions.
 * - 91 (`BUSINESS_CHARGE_CCIMPORT`): Report with the list of 'Credit Card Import Fees' transactions.
 * - 104 (`BUSINESS_CHARGE_EARLY`): Report with the list of 'Early Termination' transactions.
 * - 92 (`BUSINESS_CHARGE_HARDWARE`): Report with the list of 'Hardware' transactions.
 * - 96 (`BUSINESS_CHARGE_OTHER`): Report with the list of 'OTHER' transactions.
 * - 93 (`BUSINESS_CHARGE_SETUP`): Report with the list of 'Set Up Fees' transactions.
 * - 226 (`BUSINESS_CUSTOMER_STATUS_HISTORY`): Report with list of customers' churn status history.
 * - 225 (`BUSINESS_CUSTOMER_STATUS_LOCATION`): Report with list of customers' statuses.
 * - 247 (`BUSINESS_FRANCHISE_HOURS`): List of franchisee business hours.
 * - 141 (`BUSINESS_FRANCHISE_LOCATION`): List of franchisee locations.
 * - 142 (`BUSINESS_FRANCHISE_REGION_LIST`): List of franchise region.
 * - 219 (`BUSINESS_FRANCHISE_REPORT_CURVES_SABA`): Saba files report.
 * - 125 (`BUSINESS_LEAD`): Report with list of customer leads.
 * 
 *   Referral and referrer businesses can be specified in this report.
 * - 82 (`BUSINESS_MERCHANT_PROCESS`): The number of unique merchant accounts that have processed more than $100 from
 * the beginning.
 * - 83 (`BUSINESS_MERCHANT_PROCESS_BEGIN`): The number of unique merchant accounts that processed greater than $100
 * for the first time during the selected period.
 * - 260 (`BUSINESS_MESSAGE`): Report with list of business having active Sms subscription.
 * - 94 (`BUSINESS_METRIC`): WellnessLiving Key Metrics.
 * - 126 (`BUSINESS_PARTNER_PAY`): Report with amount that should be paid to partners for their referrals.
 * - 128 (`BUSINESS_PARTNER_REFERRAL_DETAIL`): Report with list of all referrals of the given business.
 * 
 *   Includes information about all business that became our customers with special link of one of our existing
 *   customer.
 * - 129 (`BUSINESS_PARTNER_REFERRAL_SUMMARY`): Report with list of all businesses which gave us at least one new
 * customer.
 * - 127 (`CLASSES_SCHEDULE`): Report which allows to view list of classes that starts or ends within specific date
 * range.
 * - 205 (`CLASSES_UTILIZATION_CHART`): Class capacity utilization metric.
 * - 110 (`CONTACT_MEMBER_HISTORY`): History of a contacts with clients.
 * - 152 (`CONTACT_MEMBER_HISTORY_USER`): History of a contacts for one certain client.
 * - 215 (`EVENT_UTILIZATION_CHART`): Event capacity utilization metric.
 * - 134 (`FAMILY_ALL`): List of all relatives in the business.
 * - 159 (`FRANCHISE_TRANSFER_MEMBERSHIP_HISTORY_LIST`): Franchise membership transfer history report.
 * - 160 (`FRANCHISE_TRANSFER_MEMBERSHIP_REQUESTED_LIST`): Franchise membership requested transfers report.
 * - 266 (`GYMPASS_LOCATION`): Report to view list of locations with gympass integration status.
 * - 121 (`IMPORT_MIGRATION_COMPANY_URL_FAIL`): List of all link that import could not process correctly even after max
 * count of attempts.
 * - 220 (`IMPORT_MIGRATION_COMPANY_VISIT_LIST`): A list of imported visits.
 * - 181 (`INSURANCE_PROFILE_PROGRAM`): "Wellness Program" report on user profile.
 * - 184 (`INSURANCE_PROFILE_PROGRAM_DETAIL`): Detail wellness program report on user profile.
 * - 183 (`INSURANCE_REIMBURSEMENT_DETAIL`): List of clients, which got reimbursement.
 * - 217 (`INSURANCE_REIMBURSEMENT_FRANCHISE_DETAIL`): List of clients, which got reimbursement.
 * - 218 (`INSURANCE_REIMBURSEMENT_FRANCHISE_SUMMARY`): Total amounts of reimbursement by partner.
 * - 233 (`INSURANCE_REIMBURSEMENT_REBATE_FILE`): List of partner, which support reimbursement export and import.
 * - 182 (`INSURANCE_REIMBURSEMENT_SUMMARY`): Total amounts of reimbursement by partner.
 * - 241 (`ISAAC_CONTROL`): Isaac control report.
 * - 173 (`LEAD_FRANCHISE_REPORT_CHART`): Franchise leads from lead capture forms. Chart representation.
 * - 167 (`LEAD_FRANCHISE_REPORT_LIST`): Franchise leads from lead capture forms. Table representation.
 * - 176 (`LEAD_FRANCHISE_REPORT_YOY`): Franchise leads from lead capture forms. Year-by-year chart representation.
 * - 42 (`LEAD_LIST`): Leads from lead capture forms.
 * - 200 (`LEAD_NEWEST_METRIC_CHART`): New leads metric.
 * - 203 (`LEAD_NEWEST_METRIC_YOY`): New leads YOY metric.
 * - 166 (`LEAD_REPORT_CHART`): Leads from lead capture forms.
 * - 35 (`LOCATION_MARKET`): List of market locations.
 * - 136 (`LOG`): Log report of staff activity.
 * - 43 (`LOGIN_ACCOUNT`): List of clients with information about account state.
 * - 75 (`LOGIN_BIRTHDAY`): List of clients with upcoming birthdays within a specified date range.
 * - 199 (`LOGIN_CLIENT_NEWEST_METRIC_CHART`): For the past 4 years, shows the number of clients whose
 *   status changed from "Prospect" to any other in each year
 * - 76 (`LOGIN_COUPON`): List of all Gift Cards purchased.
 * - 156 (`LOGIN_FRANCHISE_DETAIL_LIST`): Detail franchise client report table.
 * - 162 (`LOGIN_FRANCHISE_STATUS_LIST`): Franchise client status report table.
 * - 22 (`LOGIN_LIST`): Login list.
 * - 33 (`LOGIN_LIST_ALL`): Login list all.
 * - 122 (`LOGIN_MEMBER_TYPE_HISTORY`): Report with conversions of Login Types.
 * - 72 (`LOGIN_PROFILE`): Report "Client Data".
 * - 40 (`LOGIN_RANK`): Report about client's ranks.
 * - 261 (`LOGIN_RISK`): List of clients that are at churn risk according to isaac prediction.
 * - 52 (`LOGIN_VISIT`): Report with client's attendance history.
 * - 46 (`MAIL_BUSINESS_LIST`): Count of sent mail and sms per business.
 * - 37 (`MAIL_CAMPAIGN_DETAIL`): Mail campaign details list report.
 * - 36 (`MAIL_CAMPAIGN_LIST`): Mail campaign history list report.
 * - 38 (`MAIL_HISTORY_LIST`): Mail history list report.
 * - 149 (`MEMBER_PROGRESS_LOG_BODY_FAT`): Member progress body fat report in chart view.
 * - 146 (`MEMBER_PROGRESS_LOG_CHART`): Member progress report collection for charts.
 * - 150 (`MEMBER_PROGRESS_LOG_CLIENT`): Report with list of progress log per client.
 * - 147 (`MEMBER_PROGRESS_LOG_LIST`): Member progress main report in table view.
 * - 145 (`MEMBER_PROGRESS_LOG_TABLE`): Member progress report collection for table.
 * - 148 (`MEMBER_PROGRESS_LOG_WEIGHT`): Member progress weight report in chart view.
 * - 44 (`PAY_BANK_CARD_EXPIRE`): List of clients' credit cards with expiration date.
 * - 235 (`PAY_METHOD_BUSINESS`): Total Sum Processed by all Businesses.
 * - 78 (`PAY_METHOD_SYSTEM`): Total Sum Processed from all Businesses to wellnessliving.
 * - 242 (`PAY_METHOD_SYSTEM_LOGIN`): Processing per Business with Login Date.
 * - 45 (`PAY_REFUND`): A report to track history of refunds.
 * - 77 (`PAY_TRANSACTION_BATCH`): A list of payment transactions that are in the NMI batches.
 * - 113 (`PAY_TRANSACTION_CASH`): List of Cash Outs.
 * - 34 (`PAY_TRANSACTION_LIST`): If the report is opened in backend it shows a list of transactions for the current
 * business.
 *   If the report is opened outside backend it shows a list of all system transactions.
 * 
 *   This report is available for the staff and all administrators.
 * - 119 (`PAY_TRANSACTION_SUM`): If the report is opened in backend it shows a list of transactions for the current
 * business.
 *   If the report is opened outside backend it shows a list of all system transactions.
 * 
 *   This report is available for the staff and all administrators.
 * - 79 (`PAY_TRANSACTION_SYSTEM_ALL`): Revenue Report for WellnessLiving Accounting.
 *   Shows a list of all system transactions. Contains a list of special totals.
 * 
 *   This report is available only for administrators with special privilege.
 * - 62 (`PAY_TRANSACTION_SYSTEM_LIST`): If the report is opened in backend it shows a list of system transactions for
 * the current business.
 *   If the report is opened outside backend it shows a list of all system transactions.
 * 
 *   This report is available for all administrators.
 * - 106 (`PAY_TRANSACTION_SYSTEM_REFUND`): Revenue Report for WellnessLiving Accounting.
 *   Shows a list of refund and void system transactions.
 * 
 *   This report is available only for administrators with special privilege.
 * - 143 (`PAY_TRANSACTION_SYSTEM_SUMMARY`): Sum of all transactions from businesses to system merchants.
 * 
 *   This report is available only for administrators with special privilege.
 * - 120 (`PAY_TRANSACTION_USER`): If the report is opened in backend it shows a list of transactions for the one given
 * user in the current business.
 *   If the report is opened outside backend it shows a list of all system transactions for the given user.
 * 
 *   This report is available for the staff and all administrators.
 * - 253 (`PAY_TRANSACTION_USER_CLIENT`): This report is available for user in client app.
 * - 103 (`POSTCARD_HISTORY`): Postcard history list report.
 * 
 *   This report contains all sent postcards in the business with information
 *   about price of postcard, content and status.
 * - 180 (`PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_HISTORY`): Attendance history report in frontend.
 * - 179 (`PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_UPCOMING`): Upcoming schedule report in frontend.
 * - 178 (`PROFILE_ATTENDANCE_SCHEDULE_HISTORY`): Attendance history report.
 * - 262 (`PROFILE_ATTENDANCE_SCHEDULE_LOGIN_PROMOTION_HISTORY`): Attendance history report for given login promotion.
 * - 263 (`PROFILE_ATTENDANCE_SCHEDULE_LOGIN_PROMOTION_UPCOMING`): Upcoming schedule report for given login promotion.
 * - 177 (`PROFILE_ATTENDANCE_SCHEDULE_UPCOMING`): Upcoming schedule report.
 * - 255 (`PROFILE_CONTRACT_LIST`): Contract list report in client profile.
 * - 265 (`PROFILE_FORM_RESPONSE`): Report to view list of responses for specific user in client profile.
 * - 193 (`PROFILE_PURCHASE_REPORT_COUPON`): Gift Card report in client profile.
 * - 192 (`PROFILE_PURCHASE_REPORT_EVENT`): Session Pass report in client profile.
 * - 213 (`PROFILE_PURCHASE_REPORT_GROUPON`): Groupon report in client profile.
 * - 188 (`PROFILE_PURCHASE_REPORT_MEMBERSHIP`): Membership report in client profile.
 * - 189 (`PROFILE_PURCHASE_REPORT_PACKAGE`): Package report in client profile.
 * - 190 (`PROFILE_PURCHASE_REPORT_SESSION_DURATION`): Duration Pass report in client profile.
 * - 191 (`PROFILE_PURCHASE_REPORT_SESSION_PASS`): Session Pass report in client profile.
 * - 194 (`PROFILE_PURCHASE_REPORT_SESSION_SINGLE`): Single Session report in client profile.
 * - 206 (`PROMOTION_INTRODUCTORY_METRIC_CHART`): Intro offers metric.
 * - 130 (`PROMOTION_MEMBERSHIP_NEGATIVE`): Shows list of memberships with negative balances.
 * - 108 (`PROMOTION_PASS_MEMBERSHIP`): Shows list of pricing options from that were imported mindbody and converted
 * into memberships.
 * 
 *   Such pricing options are created as passes but they are marked as removed. During migration process all their
 * names
 *   are used to create connected memberships.
 * - 60 (`PURCHASE_AUTO_LIST`): A list of payment transactions including scheduled transaction (recurrent payments for
 * memberships and renewals of
 *   promotions).
 * - 115 (`PURCHASE_CLIENT_SUMMARY`): Report with list of sales per client.
 * - 175 (`PURCHASE_FRANCHISE_MEMBERSHIP_CHART`): Summary franchise memberships report (chart view).
 * - 257 (`PURCHASE_FRANCHISE_MEMBERSHIP_DETAIL`): Summary franchise memberships report.
 * - 174 (`PURCHASE_FRANCHISE_MEMBERSHIP_LIST`): Summary franchise memberships report.
 * - 123 (`PURCHASE_ITEM_ACCRUAL_CASH`): Purchases that have been bought divided by payment methods.
 * - 171 (`PURCHASE_ITEM_ACCRUAL_CASH_CHART`): Purchases that have been bought divided by time.
 * - 132 (`PURCHASE_ITEM_ACCRUAL_MIGRATION`): Special quick purchases report for migration.
 * - 133 (`PURCHASE_ITEM_ACCRUAL_SUMMARY`): Summaries of the sales divided by days, months or years.
 * - 27 (`PURCHASE_ITEM_COUNT`): Purchase item count.
 * - 50 (`PURCHASE_ITEM_COUNT_PRODUCT`): Purchase item count product.
 * - 51 (`PURCHASE_ITEM_COUNT_REVENUE`): Purchase item count revenue.
 * - 26 (`PURCHASE_ITEM_LIST`): Purchase item list.
 * - 48 (`PURCHASE_ITEM_LIST_PRODUCT`): All sales report.
 * - 49 (`PURCHASE_ITEM_LIST_REVENUE`): Sales With Revenue Categories report.
 * - 118 (`PURCHASE_ITEM_LIST_USER`): List of sale for the one user.
 * - 165 (`PURCHASE_MEMBERSHIP_CHART`): List of memberships in chart format.
 * - 71 (`PURCHASE_MEMBERSHIP_LIST`): List of memberships.
 * - 198 (`PURCHASE_MEMBERSHIP_METRIC_CHART`): Lost members metric.
 * - 202 (`PURCHASE_MEMBERSHIP_RECURRING_METRIC_CHART`): Recurring revenue metric.
 * - 195 (`PURCHASE_METRIC_CHART`): All sales metric.
 * - 201 (`PURCHASE_METRIC_YOY`): All sales YOY metric.
 * - 109 (`PURCHASE_OPTION_SUMMARY`): Report with list of sales grouped by purchase options. Products and drop-ins are
 * not included.
 * - 30 (`PURCHASE_TAG_COUNT`): Purchase tag count.
 * - 31 (`PURCHASE_TAG_LIST`): Purchase tag list.
 * - 29 (`PURCHASE_TAX_COUNT`): Report taxes of business in list format.
 * - 28 (`PURCHASE_TAX_LIST`): Report taxes of business in chart format.
 * - 99 (`PURCHASE_TIP`): List of sales with non zero tips.
 * - 101 (`PURCHASE_TIP_SUM`): Tips summary by staff.
 * - 264 (`QUIZ_RESPONSE`): Report to view list of responses for specific quiz.
 * - 246 (`REPORT_BACKGROUND_GENERATE`): Report with list of generated reports.
 * - 47 (`REVIEW_LIST`): Report with list of customers reviews. Available only in business backend and contains reviews
 * on this business.
 * - 53 (`REVIEW_ROOT`): Report with list of customers reviews. Available out of the backend and contains reviews on
 * all businesses.
 * - 56 (`REWARD_BOARD`): Report client's reward points.
 * - 9 (`SCHEDULE_PROSPECT_COUNT`): Schedule prospect count.
 * - 10 (`SCHEDULE_PROSPECT_LIST`): Daily Tracker.
 * - 39 (`SCHEDULE_PROSPECT_LIST_TODAY`): Report about daily booking activity special for dashboard.
 * - 11 (`SCHEDULE_WAIT_LIST`): Schedule wait list.
 * - 102 (`SHOP_BARCODE`): Products, Purchase Options and Packages with Barcode.
 * - 80 (`SHOP_PRODUCT`): Inventory On Hand.
 * - 243 (`SHOP_PRODUCT_OPTION_INVENTORY_COUNT`): Physical Inventory Count.
 * - 116 (`SMS_HISTORY`): SMS history report.
 * - 212 (`SOCIAL_SHARE_DETAILS_LIST`): Social sharing details.
 * - 197 (`SOCIAL_SHARE_METRIC_CHART`): All social sharing.
 * - 214 (`SOCIAL_SHARE_SUMMARY_LIST`): Social sharing summary by user.
 * - 24 (`STAFF_PAY_COUNT`): Chart version of [RsReportSid::STAFF_PAY_LIST](#/components/schemas/RsReportSid) report.
 * - 25 (`STAFF_PAY_DETAIL`): Report that contains detail information about staff payments for each option.
 * - 23 (`STAFF_PAY_LIST`): Report that contains general information about payments for each staff.
 * - 137 (`STAFF_RETENTION`): Staff retention report collection.
 * - 138 (`STAFF_RETENTION_CLIENT_NEW`): Staff Member New Clients Retention report.
 * - 139 (`STAFF_RETENTION_CLIENT_REPEAT`): Staff Member Repeat Clients Retention report.
 * - 140 (`STAFF_RETENTION_CLIENT_SUMMARY`): Staff Member Client Retention Summary report.
 * - 111 (`STAFF_TIME_DETAIL`): Report that contains detailed information about staff clock-in and clock-out, total
 * load, hourly pay rates, average
 *   hourly and additional payments and others for a day.
 * - 112 (`STAFF_TIME_SUMMARY`): Report that contains summary information about staff clock-in and clock-out, total
 * load, hourly pay rates, average
 *   hourly and additional payments and others for a specified period.
 * - 86 (`TASK_MANAGER`): Staff task manager.
 * - 234 (`TAX_REGION`): Report that contains regional taxes.
 * - 185 (`USER_DUPLICATE`): Report with potential client duplicates.
 * - 239 (`VIDEO_BUSINESS_ALL`): Report with all businesses, which has videos and count of videos and total size of the
 * videos.
 * - 240 (`VIDEO_BUSINESS_UPLOAD`): Report with all businesses, which has videos and count of videos and total size of
 * the videos
 *   filtered with upload date.
 * - 238 (`VIDEO_DETAIL`): Report with all business videos and basic information about these videos.
 * - 250 (`VIDEO_SUMMARY`): Report with all business videos and detail information about these videos.
 * - 249 (`VIDEO_VIEW_DETAIL`): Report with all views of videos and information about a viewers.
 * - 245 (`VIRTUAL_ZOOM_USER_HISTORY`): Report with list of canceled appointments.
 * - 70 (`VISIT_APPOINTMENT_COUNT`): Controls visit appointment report in chart format.
 * - 66 (`VISIT_APPOINTMENT_DETAIL`): Appointment details analysis report
 * - 65 (`VISIT_APPOINTMENT_LIST`): Appointment details analysis report
 * - 64 (`VISIT_ATTEND_LIST`): List of visits in attended state.
 * - 268 (`VISIT_ATTEND_LIST_LEGACY`): List of visits in attended state.
 * - 4 (`VISIT_BOOK_COUNT`): Visit book count.
 * - 6 (`VISIT_BOOK_LIST`): Visit book list.
 * - 20 (`VISIT_CLASS_AVERAGE_COUNT`): Visit class average count.
 * - 18 (`VISIT_CLASS_AVERAGE_LIST`): Visit class average list.
 * - 32 (`VISIT_CLASS_BUY`): Visit class buy.
 * - 61 (`VISIT_CLASS_BUY_DETAIL`): Controls list report for attendance. With information about usage purchase option.
 * - 16 (`VISIT_CLASS_COUNT`): Controls visit class report in chart format.
 * - 59 (`VISIT_CLASS_DETAIL`): Class analysis report.
 * - 14 (`VISIT_CLASS_LIST`): Simplified variation of report
 * [RsReportSid::VISIT_CLASS_DETAIL](#/components/schemas/RsReportSid).
 * - 131 (`VISIT_DUPLICATE`): Report with list of duplicated visits.
 * - 69 (`VISIT_EVENT_COUNT`): Controls visit event report in chart format.
 * - 68 (`VISIT_EVENT_DETAIL`): Event details analysis report
 * - 67 (`VISIT_EVENT_LIST`): Event analysis report
 * - 3 (`VISIT_FIRST_COUNT`): Old first visits report.
 * - 2 (`VISIT_FIRST_LIST`): Old first visits report.
 * - 224 (`VISIT_FIRST_SCOPED_COUNT`): Filterable first visit list report, allowing to see first visits to certain
 * criteria (locations/events/etc.)
 *   rather than first visits ever. Chart version.
 * - 223 (`VISIT_FIRST_SCOPED_LIST`): Filterable first visit list report, allowing to see first visits to certain
 * criteria (locations/events/etc.)
 *   rather than first visits ever. Table version.
 * - 186 (`VISIT_FRANCHISE_LOCATION_CROSS_DETAIL_FRANCHISEE`): Detail franchise cross-location visits table for
 * franchisee.
 * - 157 (`VISIT_FRANCHISE_LOCATION_CROSS_DETAIL_LIST`): Detail franchise cross-location visits table.
 * - 164 (`VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_CHART`): Summary franchise cross-location visits chart.
 * - 187 (`VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_FRANCHISEE`): Summary franchise cross-location visits table for
 * franchisee.
 * - 158 (`VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_LIST`): Summary franchise cross-location visits table.
 * - 8 (`VISIT_LAST_COUNT`): Expired passes report in chart format.
 * - 7 (`VISIT_LAST_LIST`): Expired passes report in list format.
 * - 168 (`VISIT_LOCATION_CROSS_DETAIL_LIST`): Detail cross-location visits table. For regular businesses.
 * - 170 (`VISIT_LOCATION_CROSS_SUMMARY_CHART`): Summary cross-location visits chart. For regular businesses.
 * - 169 (`VISIT_LOCATION_CROSS_SUMMARY_LIST`): Summary cross-location visits table. For regular businesses.
 * - 12 (`VISIT_LOGIN_LIST`): Visit login list.
 * - 63 (`VISIT_REMAIN_LIST`): Visits Remaining.
 * - 144 (`VISIT_REMAIN_LIST_TEMP`): Visits Remaining.
 *   Temporary copy of the report [RsReportSid::VISIT_REMAIN_LIST](#/components/schemas/RsReportSid) should be removed
 * after Sprint 33 release.
 * - 58 (`VISIT_REVENUE_DETAIL`): Detailed revenue by service.
 * - 57 (`VISIT_REVENUE_LIST`): Service revenue analysis.
 * - 41 (`VISIT_RISK`): Risky clients.
 * - 216 (`VISIT_RISK_ISAAC`): Event capacity utilization metric.
 * - 19 (`VISIT_STAFF_AVERAGE_COUNT`): Visit staff average count.
 * - 17 (`VISIT_STAFF_AVERAGE_LIST`): Visit staff average list.
 * - 15 (`VISIT_STAFF_COUNT`): Visit staff count.
 * - 13 (`VISIT_STAFF_LIST`): Visit staff list.
 * - 74 (`VISIT_UNPAID_DETAIL`): Detail list of unpaid visits.
 * - 73 (`VISIT_UNPAID_LIST`): List of unpaid visits.
 * - 210 (`VISIT_WORKOUT_APPOINTMENT_LIST`): Monthly coaching sessions YOY report for Curves business.
 * - 211 (`VISIT_WORKOUT_APPOINTMENT_YOY`): Monthly coaching sessions YOY report for Curves business.
 * - 209 (`VISIT_WORKOUT_GYM_LIST`): Workout list report for Curves business.
 * - 207 (`VISIT_WORKOUT_GYM_YOY`): Workout YOY report for Curves business.
 * - 258 (`ZOOM_SYSTEM_BUSINESS`): Report with list of businesses connected to FitLIVE.
 * - 259 (`ZOOM_SYSTEM_COUNT`): Report with list of businesses connected to FitLIVE.
 */
enum RsReportSid: int
{
    case APPOINTMENT_CANCEL = 163;
    case APPOINTMENT_REQUEST = 54;
    case APPOINTMENT_REQUEST_SHORT = 55;
    case BOOK_METRIC_CHART = 204;
    case BUSINESS_ACCOUNT_APPLICATION = 117;
    case BUSINESS_ACCOUNT_APPLICATION_ANNUAL = 135;
    case BUSINESS_ACCOUNT_APPLICATION_NEW = 221;
    case BUSINESS_ACCOUNT_CHURN = 81;
    case BUSINESS_ACCOUNT_COUPON = 237;
    case BUSINESS_ACCOUNT_CUSTOMER = 84;
    case BUSINESS_ACCOUNT_CUSTOMER_BEGIN = 85;
    case BUSINESS_ACCOUNT_CUSTOMER_LOCATION = 244;
    case BUSINESS_ACCOUNT_DEBT = 105;
    case BUSINESS_ACCOUNT_LOG = 248;
    case BUSINESS_ACCOUNT_LOG_ALL = 267;
    case BUSINESS_ACCOUNT_REVENUE = 227;
    case BUSINESS_ACCOUNT_REVENUE_SUBSCRIPTION = 222;
    case BUSINESS_ACCOUNT_REVENUE_TAX = 236;
    case BUSINESS_ACCOUNT_SCHEDULE_PREVIOUS = 251;
    case BUSINESS_ACCOUNT_SCHEDULE_UPCOMING = 252;
    case BUSINESS_ACCOUNT_SKIP = 98;
    case BUSINESS_ACCOUNT_SUBSCRIPTION = 254;
    case BUSINESS_ACCOUNT_SUBSCRIPTION_CHURN = 256;
    case BUSINESS_ACCOUNT_TRANSACTION_ANNUAL = 100;
    case BUSINESS_ACCOUNT_TRANSACTION_BONUS = 88;
    case BUSINESS_ACCOUNT_TRANSACTION_BONUS_DIRECT = 114;
    case BUSINESS_ACCOUNT_TRANSACTION_FAIL = 87;
    case BUSINESS_ACCOUNT_TRANSACTION_MERCHANT_REVENUE = 95;
    case BUSINESS_ACCOUNT_TRANSACTION_NMI = 89;
    case BUSINESS_ALL = 107;
    case BUSINESS_APPLICATION_METRIC_CHART = 208;
    case BUSINESS_CHARGE_APPROVAL = 90;
    case BUSINESS_CHARGE_CCIMPORT = 91;
    case BUSINESS_CHARGE_EARLY = 104;
    case BUSINESS_CHARGE_HARDWARE = 92;
    case BUSINESS_CHARGE_OTHER = 96;
    case BUSINESS_CHARGE_SETUP = 93;
    case BUSINESS_CUSTOMER_STATUS_HISTORY = 226;
    case BUSINESS_CUSTOMER_STATUS_LOCATION = 225;
    case BUSINESS_FRANCHISE_HOURS = 247;
    case BUSINESS_FRANCHISE_LOCATION = 141;
    case BUSINESS_FRANCHISE_REGION_LIST = 142;
    case BUSINESS_FRANCHISE_REPORT_CURVES_SABA = 219;
    case BUSINESS_LEAD = 125;
    case BUSINESS_MERCHANT_PROCESS = 82;
    case BUSINESS_MERCHANT_PROCESS_BEGIN = 83;
    case BUSINESS_MESSAGE = 260;
    case BUSINESS_METRIC = 94;
    case BUSINESS_PARTNER_PAY = 126;
    case BUSINESS_PARTNER_REFERRAL_DETAIL = 128;
    case BUSINESS_PARTNER_REFERRAL_SUMMARY = 129;
    case CLASSES_SCHEDULE = 127;
    case CLASSES_UTILIZATION_CHART = 205;
    case CONTACT_MEMBER_HISTORY = 110;
    case CONTACT_MEMBER_HISTORY_USER = 152;
    case EVENT_UTILIZATION_CHART = 215;
    case FAMILY_ALL = 134;
    case FRANCHISE_TRANSFER_MEMBERSHIP_HISTORY_LIST = 159;
    case FRANCHISE_TRANSFER_MEMBERSHIP_REQUESTED_LIST = 160;
    case GYMPASS_LOCATION = 266;
    case IMPORT_MIGRATION_COMPANY_URL_FAIL = 121;
    case IMPORT_MIGRATION_COMPANY_VISIT_LIST = 220;
    case INSURANCE_PROFILE_PROGRAM = 181;
    case INSURANCE_PROFILE_PROGRAM_DETAIL = 184;
    case INSURANCE_REIMBURSEMENT_DETAIL = 183;
    case INSURANCE_REIMBURSEMENT_FRANCHISE_DETAIL = 217;
    case INSURANCE_REIMBURSEMENT_FRANCHISE_SUMMARY = 218;
    case INSURANCE_REIMBURSEMENT_REBATE_FILE = 233;
    case INSURANCE_REIMBURSEMENT_SUMMARY = 182;
    case ISAAC_CONTROL = 241;
    case LEAD_FRANCHISE_REPORT_CHART = 173;
    case LEAD_FRANCHISE_REPORT_LIST = 167;
    case LEAD_FRANCHISE_REPORT_YOY = 176;
    case LEAD_LIST = 42;
    case LEAD_NEWEST_METRIC_CHART = 200;
    case LEAD_NEWEST_METRIC_YOY = 203;
    case LEAD_REPORT_CHART = 166;
    case LOCATION_MARKET = 35;
    case LOG = 136;
    case LOGIN_ACCOUNT = 43;
    case LOGIN_BIRTHDAY = 75;
    case LOGIN_CLIENT_NEWEST_METRIC_CHART = 199;
    case LOGIN_COUPON = 76;
    case LOGIN_FRANCHISE_DETAIL_LIST = 156;
    case LOGIN_FRANCHISE_STATUS_LIST = 162;
    case LOGIN_LIST = 22;
    case LOGIN_LIST_ALL = 33;
    case LOGIN_MEMBER_TYPE_HISTORY = 122;
    case LOGIN_PROFILE = 72;
    case LOGIN_RANK = 40;
    case LOGIN_RISK = 261;
    case LOGIN_VISIT = 52;
    case MAIL_BUSINESS_LIST = 46;
    case MAIL_CAMPAIGN_DETAIL = 37;
    case MAIL_CAMPAIGN_LIST = 36;
    case MAIL_HISTORY_LIST = 38;
    case MEMBER_PROGRESS_LOG_BODY_FAT = 149;
    case MEMBER_PROGRESS_LOG_CHART = 146;
    case MEMBER_PROGRESS_LOG_CLIENT = 150;
    case MEMBER_PROGRESS_LOG_LIST = 147;
    case MEMBER_PROGRESS_LOG_TABLE = 145;
    case MEMBER_PROGRESS_LOG_WEIGHT = 148;
    case PAY_BANK_CARD_EXPIRE = 44;
    case PAY_METHOD_BUSINESS = 235;
    case PAY_METHOD_SYSTEM = 78;
    case PAY_METHOD_SYSTEM_LOGIN = 242;
    case PAY_REFUND = 45;
    case PAY_TRANSACTION_BATCH = 77;
    case PAY_TRANSACTION_CASH = 113;
    case PAY_TRANSACTION_LIST = 34;
    case PAY_TRANSACTION_SUM = 119;
    case PAY_TRANSACTION_SYSTEM_ALL = 79;
    case PAY_TRANSACTION_SYSTEM_LIST = 62;
    case PAY_TRANSACTION_SYSTEM_REFUND = 106;
    case PAY_TRANSACTION_SYSTEM_SUMMARY = 143;
    case PAY_TRANSACTION_USER = 120;
    case PAY_TRANSACTION_USER_CLIENT = 253;
    case POSTCARD_HISTORY = 103;
    case PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_HISTORY = 180;
    case PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_UPCOMING = 179;
    case PROFILE_ATTENDANCE_SCHEDULE_HISTORY = 178;
    case PROFILE_ATTENDANCE_SCHEDULE_LOGIN_PROMOTION_HISTORY = 262;
    case PROFILE_ATTENDANCE_SCHEDULE_LOGIN_PROMOTION_UPCOMING = 263;
    case PROFILE_ATTENDANCE_SCHEDULE_UPCOMING = 177;
    case PROFILE_CONTRACT_LIST = 255;
    case PROFILE_FORM_RESPONSE = 265;
    case PROFILE_PURCHASE_REPORT_COUPON = 193;
    case PROFILE_PURCHASE_REPORT_EVENT = 192;
    case PROFILE_PURCHASE_REPORT_GROUPON = 213;
    case PROFILE_PURCHASE_REPORT_MEMBERSHIP = 188;
    case PROFILE_PURCHASE_REPORT_PACKAGE = 189;
    case PROFILE_PURCHASE_REPORT_SESSION_DURATION = 190;
    case PROFILE_PURCHASE_REPORT_SESSION_PASS = 191;
    case PROFILE_PURCHASE_REPORT_SESSION_SINGLE = 194;
    case PROMOTION_INTRODUCTORY_METRIC_CHART = 206;
    case PROMOTION_MEMBERSHIP_NEGATIVE = 130;
    case PROMOTION_PASS_MEMBERSHIP = 108;
    case PURCHASE_AUTO_LIST = 60;
    case PURCHASE_CLIENT_SUMMARY = 115;
    case PURCHASE_FRANCHISE_MEMBERSHIP_CHART = 175;
    case PURCHASE_FRANCHISE_MEMBERSHIP_DETAIL = 257;
    case PURCHASE_FRANCHISE_MEMBERSHIP_LIST = 174;
    case PURCHASE_ITEM_ACCRUAL_CASH = 123;
    case PURCHASE_ITEM_ACCRUAL_CASH_CHART = 171;
    case PURCHASE_ITEM_ACCRUAL_MIGRATION = 132;
    case PURCHASE_ITEM_ACCRUAL_SUMMARY = 133;
    case PURCHASE_ITEM_COUNT = 27;
    case PURCHASE_ITEM_COUNT_PRODUCT = 50;
    case PURCHASE_ITEM_COUNT_REVENUE = 51;
    case PURCHASE_ITEM_LIST = 26;
    case PURCHASE_ITEM_LIST_PRODUCT = 48;
    case PURCHASE_ITEM_LIST_REVENUE = 49;
    case PURCHASE_ITEM_LIST_USER = 118;
    case PURCHASE_MEMBERSHIP_CHART = 165;
    case PURCHASE_MEMBERSHIP_LIST = 71;
    case PURCHASE_MEMBERSHIP_METRIC_CHART = 198;
    case PURCHASE_MEMBERSHIP_RECURRING_METRIC_CHART = 202;
    case PURCHASE_METRIC_CHART = 195;
    case PURCHASE_METRIC_YOY = 201;
    case PURCHASE_OPTION_SUMMARY = 109;
    case PURCHASE_TAG_COUNT = 30;
    case PURCHASE_TAG_LIST = 31;
    case PURCHASE_TAX_COUNT = 29;
    case PURCHASE_TAX_LIST = 28;
    case PURCHASE_TIP = 99;
    case PURCHASE_TIP_SUM = 101;
    case QUIZ_RESPONSE = 264;
    case REPORT_BACKGROUND_GENERATE = 246;
    case REVIEW_LIST = 47;
    case REVIEW_ROOT = 53;
    case REWARD_BOARD = 56;
    case SCHEDULE_PROSPECT_COUNT = 9;
    case SCHEDULE_PROSPECT_LIST = 10;
    case SCHEDULE_PROSPECT_LIST_TODAY = 39;
    case SCHEDULE_WAIT_LIST = 11;
    case SHOP_BARCODE = 102;
    case SHOP_PRODUCT = 80;
    case SHOP_PRODUCT_OPTION_INVENTORY_COUNT = 243;
    case SMS_HISTORY = 116;
    case SOCIAL_SHARE_DETAILS_LIST = 212;
    case SOCIAL_SHARE_METRIC_CHART = 197;
    case SOCIAL_SHARE_SUMMARY_LIST = 214;
    case STAFF_PAY_COUNT = 24;
    case STAFF_PAY_DETAIL = 25;
    case STAFF_PAY_LIST = 23;
    case STAFF_RETENTION = 137;
    case STAFF_RETENTION_CLIENT_NEW = 138;
    case STAFF_RETENTION_CLIENT_REPEAT = 139;
    case STAFF_RETENTION_CLIENT_SUMMARY = 140;
    case STAFF_TIME_DETAIL = 111;
    case STAFF_TIME_SUMMARY = 112;
    case TASK_MANAGER = 86;
    case TAX_REGION = 234;
    case USER_DUPLICATE = 185;
    case VIDEO_BUSINESS_ALL = 239;
    case VIDEO_BUSINESS_UPLOAD = 240;
    case VIDEO_DETAIL = 238;
    case VIDEO_SUMMARY = 250;
    case VIDEO_VIEW_DETAIL = 249;
    case VIRTUAL_ZOOM_USER_HISTORY = 245;
    case VISIT_APPOINTMENT_COUNT = 70;
    case VISIT_APPOINTMENT_DETAIL = 66;
    case VISIT_APPOINTMENT_LIST = 65;
    case VISIT_ATTEND_LIST = 64;
    case VISIT_ATTEND_LIST_LEGACY = 268;
    case VISIT_BOOK_COUNT = 4;
    case VISIT_BOOK_LIST = 6;
    case VISIT_CLASS_AVERAGE_COUNT = 20;
    case VISIT_CLASS_AVERAGE_LIST = 18;
    case VISIT_CLASS_BUY = 32;
    case VISIT_CLASS_BUY_DETAIL = 61;
    case VISIT_CLASS_COUNT = 16;
    case VISIT_CLASS_DETAIL = 59;
    case VISIT_CLASS_LIST = 14;
    case VISIT_DUPLICATE = 131;
    case VISIT_EVENT_COUNT = 69;
    case VISIT_EVENT_DETAIL = 68;
    case VISIT_EVENT_LIST = 67;
    case VISIT_FIRST_COUNT = 3;
    case VISIT_FIRST_LIST = 2;
    case VISIT_FIRST_SCOPED_COUNT = 224;
    case VISIT_FIRST_SCOPED_LIST = 223;
    case VISIT_FRANCHISE_LOCATION_CROSS_DETAIL_FRANCHISEE = 186;
    case VISIT_FRANCHISE_LOCATION_CROSS_DETAIL_LIST = 157;
    case VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_CHART = 164;
    case VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_FRANCHISEE = 187;
    case VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_LIST = 158;
    case VISIT_LAST_COUNT = 8;
    case VISIT_LAST_LIST = 7;
    case VISIT_LOCATION_CROSS_DETAIL_LIST = 168;
    case VISIT_LOCATION_CROSS_SUMMARY_CHART = 170;
    case VISIT_LOCATION_CROSS_SUMMARY_LIST = 169;
    case VISIT_LOGIN_LIST = 12;
    case VISIT_REMAIN_LIST = 63;
    case VISIT_REMAIN_LIST_TEMP = 144;
    case VISIT_REVENUE_DETAIL = 58;
    case VISIT_REVENUE_LIST = 57;
    case VISIT_RISK = 41;
    case VISIT_RISK_ISAAC = 216;
    case VISIT_STAFF_AVERAGE_COUNT = 19;
    case VISIT_STAFF_AVERAGE_LIST = 17;
    case VISIT_STAFF_COUNT = 15;
    case VISIT_STAFF_LIST = 13;
    case VISIT_UNPAID_DETAIL = 74;
    case VISIT_UNPAID_LIST = 73;
    case VISIT_WORKOUT_APPOINTMENT_LIST = 210;
    case VISIT_WORKOUT_APPOINTMENT_YOY = 211;
    case VISIT_WORKOUT_GYM_LIST = 209;
    case VISIT_WORKOUT_GYM_YOY = 207;
    case ZOOM_SYSTEM_BUSINESS = 258;
    case ZOOM_SYSTEM_COUNT = 259;
}
