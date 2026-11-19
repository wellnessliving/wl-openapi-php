<?php

namespace WlSdk\Wl\Report\Filter\TaskLocation;

/**
 * A list of task location filters.
 *
 * Last ID: 2.
 *
 * Values:
 * - 1 (`HOME`): Tasks assigned to staff members from current location only.
 * - 2 (`OTHER`): Tasks assigned to staff members from other locations.
 */
class TaskLocationSid
{
    /** Tasks assigned to staff members from current location only. */
    public const HOME = 1;

    /** Tasks assigned to staff members from other locations. */
    public const OTHER = 2;
}
