<?php
namespace WlSdk\Wl\Promotion\Edit\Limit\Cycle;

/**
 * Attendance Restriction cycle type.
 * 
 * Values:
 * - 1 (`CALENDAR`): Attendance Restriction is applied at the start of the calendar cycle.
 * - 2 (`PAYMENT`): Attendance Restriction is applied at the start of the payment cycle.
 */
enum Sid: int
{
    case CALENDAR = 1;
    case PAYMENT = 2;
}
