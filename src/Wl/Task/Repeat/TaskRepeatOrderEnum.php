<?php

namespace WlSdk\Wl\Task\Repeat;

/**
 * Number of the weekday in a month for a repeat by months on a weekday, such as the second Tuesday.
 *
 * Last used ID: 5
 *
 * Values:
 * - 1 (`FIRST`): The first weekday of the month.
 * - 4 (`FOURTH`): The fourth weekday of the month.
 * - 5 (`LAST`): The last weekday of the month: the fourth or the fifth one.
 * - 2 (`SECOND`): The second weekday of the month.
 * - 3 (`THIRD`): The third weekday of the month.
 */
class TaskRepeatOrderEnum
{
    /** The first weekday of the month. */
    public const FIRST = 1;

    /** The fourth weekday of the month. */
    public const FOURTH = 4;

    /** The last weekday of the month: the fourth or the fifth one. */
    public const LAST = 5;

    /** The second weekday of the month. */
    public const SECOND = 2;

    /** The third weekday of the month. */
    public const THIRD = 3;
}
