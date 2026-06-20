<?php
namespace WlSdk;

/**
 * Set of pages for dashboard.
 * 
 * Last used ID: 12.
 * 
 * Values:
 * - 4 (`APPOINTMENT_REQUEST`): List of requested appointments.
 * - 12 (`BUSINESS_CUSTOMER_STATUS`): Collection with following reports:
 *   * [RsReportSid::BUSINESS_CUSTOMER_STATUS_HISTORY](#/components/schemas/RsReportSid),
 * - 7 (`LOGIN_CLIENT_ALL`): Collection with list of searches and "All clients" report.
 * - 8 (`MEMBER_PROGRESS_LOG_CHART`): Collection with list of progress log charts.
 * - 9 (`MEMBER_PROGRESS_LOG_TABLE`): Collection with list of progress log table.
 * - 10 (`PROFILE_ATTENDANCE_SCHEDULE`): Collection with
 * [RsReportSid::PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_UPCOMING](#/components/schemas/RsReportSid)
 *   and [RsReportSid::PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_HISTORY](#/components/schemas/RsReportSid) reports.
 * - 11 (`PROFILE_PURCHASE`): Collection with following reports:
 *   * [RsReportSid::PROFILE_PURCHASE_REPORT_MEMBERSHIP](#/components/schemas/RsReportSid),
 *   * [RsReportSid::PROFILE_PURCHASE_REPORT_PACKAGE](#/components/schemas/RsReportSid),
 *   * [RsReportSid::PROFILE_PURCHASE_REPORT_SESSION_PASS](#/components/schemas/RsReportSid),
 *   * [RsReportSid::PROFILE_PURCHASE_REPORT_SESSION_DURATION](#/components/schemas/RsReportSid),
 *   * [RsReportSid::PROFILE_PURCHASE_REPORT_SESSION_SINGLE](#/components/schemas/RsReportSid),
 *   * [RsReportSid::PROFILE_PURCHASE_REPORT_EVENT](#/components/schemas/RsReportSid),
 *   * [RsReportSid::PROFILE_PURCHASE_REPORT_COUPON](#/components/schemas/RsReportSid),
 *   * [RsReportSid::PROFILE_PURCHASE_REPORT_GROUPON](#/components/schemas/RsReportSid),
 * - 5 (`REWARD_BOARD`): Leaderboard to display in backend.
 * - 3 (`SCHEDULE_PROSPECT`): Current schedule.
 * - 6 (`STAFF_RETENTION`): Set of staff retention list reports.
 * - 2 (`VISIT`): Set of attendance reports.
 */
class RsReportPageSid
{
    /** List of requested appointments. */
    const APPOINTMENT_REQUEST = 4;
    /** Collection with following reports: */
    const BUSINESS_CUSTOMER_STATUS = 12;
    /** Collection with list of searches and "All clients" report. */
    const LOGIN_CLIENT_ALL = 7;
    /** Collection with list of progress log charts. */
    const MEMBER_PROGRESS_LOG_CHART = 8;
    /** Collection with list of progress log table. */
    const MEMBER_PROGRESS_LOG_TABLE = 9;
    /** Collection with [RsReportSid::PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_UPCOMING](#/components/schemas/RsReportSid) */
    const PROFILE_ATTENDANCE_SCHEDULE = 10;
    /** Collection with following reports: */
    const PROFILE_PURCHASE = 11;
    /** Leaderboard to display in backend. */
    const REWARD_BOARD = 5;
    /** Current schedule. */
    const SCHEDULE_PROSPECT = 3;
    /** Set of staff retention list reports. */
    const STAFF_RETENTION = 6;
    /** Set of attendance reports. */
    const VISIT = 2;
}
