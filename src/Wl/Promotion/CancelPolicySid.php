<?php

namespace WlSdk\Wl\Promotion;

/**
 * Cancel policy for cancel memberships.
 *
 * Last used ID: 3
 *
 * Values:
 * - 1 (`USE_CLIENT`): Clients can use remaining visits after membership cancellation.
 * - 2 (`USE_NONE`): Clients cannot use remaining visits after membership cancellation.
 * - 3 (`USE_STAFF`): Staff member can choose whether a client can use remaining visits after membership cancellation.
 */
class CancelPolicySid
{
    /** Clients can use remaining visits after membership cancellation. */
    public const USE_CLIENT = 1;

    /** Clients cannot use remaining visits after membership cancellation. */
    public const USE_NONE = 2;

    /** Staff member can choose whether a client can use remaining visits after membership cancellation. */
    public const USE_STAFF = 3;
}
