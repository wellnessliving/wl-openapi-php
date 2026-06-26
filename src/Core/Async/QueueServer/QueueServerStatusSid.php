<?php

namespace WlSdk\Core\Async\QueueServer;

/**
 * Statuses of asynchronous code execution worker servers.
 *
 * See `namespace.Core/Async/QueueServer/doc/statuses-of-queue-servers.md` for summary tables with information
 * about properties of the statuses and possible transitions.
 *
 * Values:
 * - 1 (`ACTIVATING`): This server is being activated now.
 *
 *   This status is set when the server was not active, it is now available, but
 *   QueueServerInfo::MIN_SUCCESSES checks have not yet been performed.
 *
 *   Servers in this state are selected for worker threads, but not selected for sending jobs.
 * - 2 (`ACTIVE`): This server is now active.
 *
 *   The server receives jobs.
 * - 3 (`DISABLED`): This server is now disabled.
 *
 *   Although this server may be good, it is manually disabled.
 *   In this state server can be safely reboot or shutdown.
 *
 *   Tasks are not sent to deactivated server.
 *   Also, this server is not pinged periodically and will not be activated automatically.
 *
 *   Servers in this state are not selected for new worker threads and not for sending new jobs.
 * - 4 (`DISABLING`): This server is being disabled now.
 *
 *   New jobs are not sent to servers that are being disabled, but worker threads still listen to jobs from this queue
 *   server that allows to wait until the queue becomes completely empty.
 *
 *   Also, this server is not pinged periodically and will not be activated automatically.
 *
 *   Instead pinging, this server is checked if it has non-empty queue.
 *   When its queue becomes completely empty, it is transitioned to DISABLED state.
 * - 5 (`FAILED`): This server is now failed.
 *
 *   It is selected for worker threads, but not for sending of new tasks.
 * - 6 (`FAILING`): This server is being failed now.
 *
 *   This status is set when the server was active, it is now available, but
 *   QueueServerInfo::MAX_FAILURES failures have not yet been occurred.
 *
 *   If a server can be pinged at least once when it is in FAILING state, it is transitioned to ACTIVE.
 *   Server is not transitioned to ACTIVATING in this case because servers in FAILING state are considered good, and
 *   selected for usage. Whereas servers in ACTIVATING state are considered bad, and not selected.
 *   Moving from FAILING to ACTIVATING effectively the same as moving directly to FAILED.
 */
class QueueServerStatusSid
{
    /** This server is being activated now. */
    public const ACTIVATING = 1;

    /** This server is now active. */
    public const ACTIVE = 2;

    /** This server is now disabled. */
    public const DISABLED = 3;

    /** This server is being disabled now. */
    public const DISABLING = 4;

    /** This server is now failed. */
    public const FAILED = 5;

    /** This server is being failed now. */
    public const FAILING = 6;
}
