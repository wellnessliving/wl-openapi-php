<?php

namespace WlSdk\Wl\Login;

/**
 * List of user roles in a system.
 *
 * Last used ID: 4
 *
 * Values:
 * - 1 (`ADMIN`): Admin role.
 * - 2 (`CLIENT`): Client role.
 * - 3 (`GUEST`): Guest role. User that is not logged in.
 * - 4 (`STAFF`): Staff member role.
 */
class LoginRoleSid
{
    /** Admin role. */
    public const ADMIN = 1;

    /** Client role. */
    public const CLIENT = 2;

    /** Guest role. User that is not logged in. */
    public const GUEST = 3;

    /** Staff member role. */
    public const STAFF = 4;
}
