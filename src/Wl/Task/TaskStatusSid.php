<?php

namespace WlSdk\Wl\Task;

/**
 * A list of task statuses.
 *
 * Values:
 * - 1 (`BACKLOG`): Task is not started.
 * - 3 (`COMPLETE`): Task completed.
 * - 2 (`PROGRESS`): Task in progress.
 */
class TaskStatusSid
{
    /** Task is not started. */
    public const BACKLOG = 1;

    /** Task completed. */
    public const COMPLETE = 3;

    /** Task in progress. */
    public const PROGRESS = 2;
}
