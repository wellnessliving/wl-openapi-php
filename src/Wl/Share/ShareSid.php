<?php
namespace WlSdk\Wl\Share;

/**
 * A list of share options.
 * 
 * Values:
 * - 2 (`EVERYONE`): Item is available for all staffs in a business.
 * - 1 (`ONLY_ME`): Item is available for current user.
 * - 3 (`SELECTED_STAFF_ROLE`): Item is available for selected staff roles.
 */
enum ShareSid: int
{
    case EVERYONE = 2;
    case ONLY_ME = 1;
    case SELECTED_STAFF_ROLE = 3;
}
