<?php
namespace WlSdk\Wl\Promotion\Guest\Pass;

/**
 * Guest Pass reset type.
 * 
 * Determines how guest pass limits are reset.
 * 
 * Last used ID: 2.
 * 
 * Values:
 * - 1 (`BILLING`): Limits reset on promotion billing day.
 * - 2 (`RENEWAL`): Limits reset on promotion renewal day.
 */
enum GuestPassResetTypeSid: int
{
    case BILLING = 1;
    case RENEWAL = 2;
}
