<?php

namespace WlSdk;

/**
 * A list of possible report date ranges.
 *
 * Last used ID: 6
 *
 * Values:
 * - 1 (`DAY`): Report for the current day.
 * - 3 (`MONTH`): Report for the current Month.
 * - 7 (`QUARTER`): Report for the current Quarter.
 * - 5 (`RANGE`): The range is selected manually.
 * - 2 (`WEEK`): Report for the current week.
 * - 4 (`YEAR`): Report for the current year.
 * - 6 (`YOY`): Report in the range of 10 years from the current year.
 */
class RsReportDateSid
{
    /** Report for the current day. */
    public const DAY = 1;

    /** Report for the current Month. */
    public const MONTH = 3;

    /** Report for the current Quarter. */
    public const QUARTER = 7;

    /** The range is selected manually. */
    public const RANGE = 5;

    /** Report for the current week. */
    public const WEEK = 2;

    /** Report for the current year. */
    public const YEAR = 4;

    /** Report in the range of 10 years from the current year. */
    public const YOY = 6;
}
