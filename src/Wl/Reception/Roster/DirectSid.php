<?php
namespace WlSdk\Wl\Reception\Roster;

/**
 * List of places to redirect user from attendance list after inactivity.
 * 
 * Values:
 * - 1 (`RECENT`): Redirect user to recently viewed class.
 * - 2 (`SCHEDULE`): Redirect user to upcoming schedule.
 */
class DirectSid
{
    /** Redirect user to recently viewed class. */
    const RECENT = 1;
    /** Redirect user to upcoming schedule. */
    const SCHEDULE = 2;
}
