<?php

namespace WlSdk\Core\AI\LogTriage;

/**
 * Base class for log-triage problem searchers.
 *
 * Values:
 * - 2357 (`Core\Watch\WatchUsageProblem`): Collects the prioritized watch-usage summary used by log triage.
 *
 *   The configuration intentionally follows the canonical watch-usage summary configuration.
 * - 2370 (`Core\AI\LogTriage\LogErrorProblem`): Problem searcher for {@link \WlSdk\Core\Log\CoreLog} error-log
 * records.
 * - 2371 (`Core\AI\LogTriage\LogSlowProblem`): Problem searcher for {@link \WlSdk\Core\Log\CoreLog} slow-operation
 * records.
 * - 2359 (`Core\AI\LogTriage\TaskAsyncProblem`): Collects erroneous asynchronous tasks retained in the asynchronous
 * error table.
 * - 2358 (`Core\AI\LogTriage\TaskBackgroundProblem`): Collects erroneous background tasks currently retained in the
 * task queue.
 */
class TriageProblemAbstract
{
    /** Collects the prioritized watch-usage summary used by log triage. */
    public const WatchUsageProblem = 2357;

    /** Problem searcher for {@link \WlSdk\Core\Log\CoreLog} error-log records. */
    public const LogErrorProblem = 2370;

    /** Problem searcher for {@link \WlSdk\Core\Log\CoreLog} slow-operation records. */
    public const LogSlowProblem = 2371;

    /** Collects erroneous asynchronous tasks retained in the asynchronous error table. */
    public const TaskAsyncProblem = 2359;

    /** Collects erroneous background tasks currently retained in the task queue. */
    public const TaskBackgroundProblem = 2358;
}
