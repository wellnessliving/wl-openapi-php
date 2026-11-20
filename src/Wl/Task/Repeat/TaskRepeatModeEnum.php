<?php

namespace WlSdk\Wl\Task\Repeat;

/**
 * When the next task of a series is made.
 *
 * Last used ID: 2
 *
 * Values:
 * - 2 (`COMPLETED`): The next task is made when the current one is completed.
 * - 1 (`SCHEDULE`): The next task is made on the due date of the current one, whether it is done or not.
 */
class TaskRepeatModeEnum
{
    /** The next task is made when the current one is completed. */
    public const COMPLETED = 2;

    /** The next task is made on the due date of the current one, whether it is done or not. */
    public const SCHEDULE = 1;
}
