<?php

namespace WlSdk\Wl\Task\Manager;

/**
 * A list of tabs in task manager report.
 *
 * Values:
 * - 3 (`ALL`): Show all tasks.
 * - 4 (`COMPLETE`): Show tasks in status complete, see {@link \WlSdk\Wl\Task\TaskStatusSid}.
 * - 2 (`FUTURE`): Show tasks in future.
 * - 5 (`OVERDUE`): Show the tasks that are overdue: not completed, with the due date and time that have passed.
 * - 1 (`TODAY`): Show tasks for today.
 */
class ManagerTabSid
{
    /** Show all tasks. */
    public const ALL = 3;

    /** Show tasks in status complete, see {@link \WlSdk\Wl\Task\TaskStatusSid}. */
    public const COMPLETE = 4;

    /** Show tasks in future. */
    public const FUTURE = 2;

    /** Show the tasks that are overdue: not completed, with the due date and time that have passed. */
    public const OVERDUE = 5;

    /** Show tasks for today. */
    public const TODAY = 1;
}
