<?php
namespace WlSdk;

/**
 * A class for the days of the week.
 * 
 * Values:
 * - 5 (`FRIDAY`): Friday.
 * - 1 (`MONDAY`): Monday.
 * - 6 (`SATURDAY`): Saturday.
 * - 7 (`SUNDAY`): Sunday.
 * - 4 (`THURSDAY`): Thursday.
 * - 2 (`TUESDAY`): Tuesday.
 * - 3 (`WEDNESDAY`): Wednesday.
 */
enum ADateWeekSid: int
{
    case FRIDAY = 5;
    case MONDAY = 1;
    case SATURDAY = 6;
    case SUNDAY = 7;
    case THURSDAY = 4;
    case TUESDAY = 2;
    case WEDNESDAY = 3;
}
