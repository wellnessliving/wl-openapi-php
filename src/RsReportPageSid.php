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
 *   * {@link \WlSdk\RsReportSid},
 * - 7 (`LOGIN_CLIENT_ALL`): Collection with list of searches and "All clients" report.
 * - 8 (`MEMBER_PROGRESS_LOG_CHART`): Collection with list of progress log charts.
 * - 9 (`MEMBER_PROGRESS_LOG_TABLE`): Collection with list of progress log table.
 * - 10 (`PROFILE_ATTENDANCE_SCHEDULE`): Collection with {@link \WlSdk\RsReportSid}
 *   and {@link \WlSdk\RsReportSid} reports.
 * - 11 (`PROFILE_PURCHASE`): Collection with following reports:
 *   * {@link \WlSdk\RsReportSid},
 *   * {@link \WlSdk\RsReportSid},
 *   * {@link \WlSdk\RsReportSid},
 *   * {@link \WlSdk\RsReportSid},
 *   * {@link \WlSdk\RsReportSid},
 *   * {@link \WlSdk\RsReportSid},
 *   * {@link \WlSdk\RsReportSid},
 *   * {@link \WlSdk\RsReportSid},
 * - 5 (`REWARD_BOARD`): Leaderboard to display in backend.
 * - 3 (`SCHEDULE_PROSPECT`): Current schedule.
 * - 6 (`STAFF_RETENTION`): Set of staff retention list reports.
 * - 2 (`VISIT`): Set of attendance reports.
 */
class RsReportPageSid
{
    /** List of requested appointments. */
    public const APPOINTMENT_REQUEST = 4;

    /** Collection with following reports: */
    public const BUSINESS_CUSTOMER_STATUS = 12;

    /** Collection with list of searches and "All clients" report. */
    public const LOGIN_CLIENT_ALL = 7;

    /** Collection with list of progress log charts. */
    public const MEMBER_PROGRESS_LOG_CHART = 8;

    /** Collection with list of progress log table. */
    public const MEMBER_PROGRESS_LOG_TABLE = 9;

    /** Collection with {@link \WlSdk\RsReportSid} */
    public const PROFILE_ATTENDANCE_SCHEDULE = 10;

    /** Collection with following reports: */
    public const PROFILE_PURCHASE = 11;

    /** Leaderboard to display in backend. */
    public const REWARD_BOARD = 5;

    /** Current schedule. */
    public const SCHEDULE_PROSPECT = 3;

    /** Set of staff retention list reports. */
    public const STAFF_RETENTION = 6;

    /** Set of attendance reports. */
    public const VISIT = 2;
}
