<?php
namespace WlSdk\Wl\Reception\Roster;

/**
 * List of places to redirect user from attendance list after inactivity.
 * 
 * Values:
 * - 1 (`RECENT`): Redirect user to recently viewed class.
 * - 2 (`SCHEDULE`): Redirect user to upcoming schedule.
 */
enum DirectSid: int
{
    case RECENT = 1;
    case SCHEDULE = 2;
}
