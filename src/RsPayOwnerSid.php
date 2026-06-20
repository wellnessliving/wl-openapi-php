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
    public const ANONYMOUS = 3;

    /** Business. */
    public const BUSINESS = 2;

    /** System user. */
    public const USER = 1;
}
