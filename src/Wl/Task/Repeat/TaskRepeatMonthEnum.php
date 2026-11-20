<?php

namespace WlSdk\Wl\Task\Repeat;

/**
 * How a series that repeats by months chooses the day of the month.
 *
 * Last used ID: 2
 *
 * Values:
 * - 1 (`DAY`): A day of the month, such as the 15th.
 * - 2 (`WEEKDAY`): A weekday of the month, such as the second Tuesday or the last Friday.
 */
class TaskRepeatMonthEnum
{
    /** A day of the month, such as the 15th. */
    public const DAY = 1;

    /** A weekday of the month, such as the second Tuesday or the last Friday. */
    public const WEEKDAY = 2;
}
