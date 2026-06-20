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
enum LoginRoleSid: int
{
    case ADMIN = 1;
    case CLIENT = 2;
    case GUEST = 3;
    case STAFF = 4;
}
