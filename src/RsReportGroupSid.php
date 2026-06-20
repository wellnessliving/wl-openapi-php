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
class RsReportGroupSid
{
    /** Step 1 day. */
    const DAY = 1;
    /** Step 1 hour. */
    const HOUR = 5;
    /** Step 1 month. */
    const MONTH = 3;
    /** Step 1 week. */
    const WEEK = 2;
    /** Step 1 year. */
    const YEAR = 4;
}
