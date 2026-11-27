<?php

namespace WlSdk\Wl\Promotion\Editor\List;

/**
 * The statuses by which the list of Purchase Options is filtered.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`ACTIVE`): Active Purchase Options: switched on and not expired.
 * - 3 (`ALL`): Purchase Options of every status.
 * - 2 (`INACTIVE`): Inactive Purchase Options: switched off or expired.
 */
class ListStatusEnum
{
    /** Active Purchase Options: switched on and not expired. */
    public const ACTIVE = 1;

    /** Purchase Options of every status. */
    public const ALL = 3;

    /** Inactive Purchase Options: switched off or expired. */
    public const INACTIVE = 2;
}
