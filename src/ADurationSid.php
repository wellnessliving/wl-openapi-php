<?php
namespace WlSdk;

/**
 * A class for managing time intervals.
 * Last ID: 9.
 * 
 * Values:
 * - 4 (`DAY`): Days.
 * - 3 (`HOUR`): Hours.
 * - 2 (`MINUTE`): Minutes.
 * - 5 (`MONTH`): Months.
 * - 1 (`SECOND`): Seconds.
 * - 7 (`WEEK`): Weeks (7 days).
 * - 9 (`WEEK2`): Two weeks (14 days).
 * - 8 (`WEEK4`): Foursome of weeks (28 days).
 * - 6 (`YEAR`): Years.
 */
class ADurationSid
{
    /** Days. */
    const DAY = 4;
    /** Hours. */
    const HOUR = 3;
    /** Minutes. */
    const MINUTE = 2;
    /** Months. */
    const MONTH = 5;
    /** Seconds. */
    const SECOND = 1;
    /** Weeks (7 days). */
    const WEEK = 7;
    /** Two weeks (14 days). */
    const WEEK2 = 9;
    /** Foursome of weeks (28 days). */
    const WEEK4 = 8;
    /** Years. */
    const YEAR = 6;
}
