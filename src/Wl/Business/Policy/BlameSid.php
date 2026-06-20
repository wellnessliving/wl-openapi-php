<?php
namespace WlSdk\Wl\Business\Policy;

/**
 * Defines if client has "Late cancel" or "No shows" sessions.
 * 
 * Values:
 * - 1 (`BOTH`): If client has "Late cancel" and "No shows" sessions.
 * - 2 (`LATE_CANCEL`): If client has "Late cancel" sessions.
 * - 3 (`NO_SHOWS`): If client has "No shows" sessions.
 */
enum BlameSid: int
{
    case BOTH = 1;
    case LATE_CANCEL = 2;
    case NO_SHOWS = 3;
}
