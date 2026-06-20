<?php
namespace WlSdk;

/**
 * Describes reports grouping dates ranges.
 * 
 * Last identifier: 5.
 * 
 * Values:
 * - 1 (`DAY`): Step 1 day.
 * - 5 (`HOUR`): Step 1 hour.
 * - 3 (`MONTH`): Step 1 month.
 * - 2 (`WEEK`): Step 1 week.
 * - 4 (`YEAR`): Step 1 year.
 */
enum RsReportGroupSid: int
{
    case DAY = 1;
    case HOUR = 5;
    case MONTH = 3;
    case WEEK = 2;
    case YEAR = 4;
}
