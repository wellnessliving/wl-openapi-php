<?php

namespace WlSdk\Core\AI\LogTriage;

/**
 * Sources from which log triage findings can be collected.
 *
 * Values:
 * - 5 (`ASYNC_TASK`): Erroneous asynchronous tasks.
 * - 4 (`BACKGROUND_TASK`): Erroneous background tasks.
 * - 1 (`ERROR_LOG`): PHP error log represented by {@link \Core\Debug\DebugPhpLog}.
 * - 2 (`SLOW_LOG`): Slow-operation log represented by {@link \Core\Debug\DebugSlowLog}.
 * - 3 (`WATCH_USAGE_STAT`): Aggregated usage statistics.
 */
class TriageSourceSid
{
    /** Erroneous asynchronous tasks. */
    public const ASYNC_TASK = 5;

    /** Erroneous background tasks. */
    public const BACKGROUND_TASK = 4;

    /** PHP error log represented by {@link \Core\Debug\DebugPhpLog}. */
    public const ERROR_LOG = 1;

    /** Slow-operation log represented by {@link \Core\Debug\DebugSlowLog}. */
    public const SLOW_LOG = 2;

    /** Aggregated usage statistics. */
    public const WATCH_USAGE_STAT = 3;
}
