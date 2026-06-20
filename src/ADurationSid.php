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
enum ADurationSid: int
{
    case DAY = 4;
    case HOUR = 3;
    case MINUTE = 2;
    case MONTH = 5;
    case SECOND = 1;
    case WEEK = 7;
    case WEEK2 = 9;
    case WEEK4 = 8;
    case YEAR = 6;
}
