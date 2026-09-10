<?php

namespace WlSdk\Wl\Schedule\Design;

/**
 * Start day of the week on the schedule.
 *
 * Last used ID: 8
 *
 * Values:
 * - 8 (`CURRENT_DAY`): Current day.
 * - 5 (`FRIDAY`): Friday.
 * - 1 (`MONDAY`): Monday.
 * - 6 (`SATURDAY`): Saturday.
 * - 7 (`SUNDAY`): Sunday.
 * - 4 (`THURSDAY`): Thursday.
 * - 2 (`TUESDAY`): Tuesday.
 * - 3 (`WEDNESDAY`): Wednesday.
 */
class WeekDaySid
{
    /** Current day. */
    public const CURRENT_DAY = 8;

    /** Friday. */
    public const FRIDAY = 5;

    /** Monday. */
    public const MONDAY = 1;

    /** Saturday. */
    public const SATURDAY = 6;

    /** Sunday. */
    public const SUNDAY = 7;

    /** Thursday. */
    public const THURSDAY = 4;

    /** Tuesday. */
    public const TUESDAY = 2;

    /** Wednesday. */
    public const WEDNESDAY = 3;
}
