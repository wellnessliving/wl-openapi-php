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
enum TaskStatusSid: int
{
    case BACKLOG = 1;
    case COMPLETE = 3;
    case PROGRESS = 2;
}
