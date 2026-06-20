<?php
namespace WlSdk\Wl\Promotion\Edit\Limit\Cycle;

/**
 * Attendance Restriction cycle type.
 * 
 * Values:
 * - 1 (`CALENDAR`): Attendance Restriction is applied at the start of the calendar cycle.
 * - 2 (`PAYMENT`): Attendance Restriction is applied at the start of the payment cycle.
 */
class Sid
{
    /** Attendance Restriction is applied at the start of the calendar cycle. */
    const CALENDAR = 1;
    /** Attendance Restriction is applied at the start of the payment cycle. */
    const PAYMENT = 2;
}
