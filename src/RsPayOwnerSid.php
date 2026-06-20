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
enum RsPayOwnerSid: int
{
    case ANONYMOUS = 3;
    case BUSINESS = 2;
    case USER = 1;
}
