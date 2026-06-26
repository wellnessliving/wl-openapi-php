<?php

namespace WlSdk;

/**
 * A list of task statuses.
 *
 * Task statuses are stored in CmsTaskThreadSql.`id_task_status`.
 *
 * Values:
 * - 2 (`ACTIVE`): The thread is being executed.
 * - 4 (`DEAD`): The thread is dead.
 *
 *   The dead thread is the one that has disconnected from MySQL and do not perform any activity.
 * - 3 (`END`): The thread is successfully finished.
 * - 1 (`INIT`): The thread is being initialized.
 * - 5 (`TERMINATED`): The server is down.
 */
class CmsTaskStatusSid
{
    /** The thread is being executed. */
    public const ACTIVE = 2;

    /** The thread is dead. */
    public const DEAD = 4;

    /** The thread is successfully finished. */
    public const END = 3;

    /** The thread is being initialized. */
    public const INIT = 1;

    /** The server is down. */
    public const TERMINATED = 5;
}
