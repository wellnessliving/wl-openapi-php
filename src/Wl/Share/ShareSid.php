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
class ShareSid
{
    /** Item is available for all staffs in a business. */
    public const EVERYONE = 2;

    /** Item is available for current user. */
    public const ONLY_ME = 1;

    /** Item is available for selected staff roles. */
    public const SELECTED_STAFF_ROLE = 3;
}
