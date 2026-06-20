<?php
namespace WlSdk;

/**
 * A list of money owners from which account money can be transferred.
 * 
 * Values:
 * - 3 (`ANONYMOUS`): Anonymous user (Walk-In).
 * - 2 (`BUSINESS`): Business.
 * - 1 (`USER`): System user.
 */
class RsPayOwnerSid
{
    /** Anonymous user (Walk-In). */
    const ANONYMOUS = 3;
    /** Business. */
    const BUSINESS = 2;
    /** System user. */
    const USER = 1;
}
