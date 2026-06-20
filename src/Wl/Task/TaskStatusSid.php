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
    const BACKLOG = 1;
    /** Task completed. */
    const COMPLETE = 3;
    /** Task in progress. */
    const PROGRESS = 2;
}
