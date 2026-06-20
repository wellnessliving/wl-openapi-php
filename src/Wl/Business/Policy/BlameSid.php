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
class BlameSid
{
    /** If client has "Late cancel" and "No shows" sessions. */
    const BOTH = 1;
    /** If client has "Late cancel" sessions. */
    const LATE_CANCEL = 2;
    /** If client has "No shows" sessions. */
    const NO_SHOWS = 3;
}
