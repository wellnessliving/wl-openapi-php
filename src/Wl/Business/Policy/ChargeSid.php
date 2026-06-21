<?php

namespace WlSdk\Wl\Business\Policy;

/**
 * Client's charge if he has "Late cancel" or "No shows" sessions.
 *
 * Values:
 * - 1 (`CHARGE`): The client should be to pay a penalty.
 * - 2 (`FLAG_ACCOUNT`): Mark account as has "Late cancel" and "No shows" sessions.
 */
class ChargeSid
{
    /** The client should be to pay a penalty. */
    public const CHARGE = 1;

    /** Mark account as has "Late cancel" and "No shows" sessions. */
    public const FLAG_ACCOUNT = 2;
}
