<?php

namespace WlSdk;

/**
 * A list of report categories.
 *
 * Last ID: 9.
 *
 * Values:
 * - 2 (`ATTENDANCE`): Category reports on attendance.
 * - 1 (`CLIENT`): Category reports on clients.
 * - 9 (`DASHBOARD`): Category on dashboards.
 * - 6 (`FRANCHISE`): Corporate reports.
 *
 *   The one business gets summary information from the all business which are related to it.
 *
 *   For example, the franchisor gets information from the all franchisees.
 * - 7 (`INSURANCE`): Insurance and reimbursements reports.
 * - 5 (`MAIL`): Category reports on mail.
 * - 8 (`METRIC`): Metrics category.
 * - 4 (`SALE`): Category reports on sales.
 * - 3 (`STAFF`): Category reports on staff.
 */
class RsReportCategorySid
{
    /** Category reports on attendance. */
    public const ATTENDANCE = 2;

    /** Category reports on clients. */
    public const CLIENT = 1;

    /** Category on dashboards. */
    public const DASHBOARD = 9;

    /** Corporate reports. */
    public const FRANCHISE = 6;

    /** Insurance and reimbursements reports. */
    public const INSURANCE = 7;

    /** Category reports on mail. */
    public const MAIL = 5;

    /** Metrics category. */
    public const METRIC = 8;

    /** Category reports on sales. */
    public const SALE = 4;

    /** Category reports on staff. */
    public const STAFF = 3;
}
