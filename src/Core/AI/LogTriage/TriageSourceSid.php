<?php

namespace WlSdk\Core\AI\LogTriage;

/**
 * Sources from which log triage findings can be collected.
 *
 * Values:
 * - 1 (`ERROR_LOG`): PHP error log represented by {@link \WlSdk\Core\Log\CoreLog}.
 * - 2 (`SLOW_LOG`): Slow-operation log represented by {@link \WlSdk\Core\Log\CoreLog}.
 * - 3 (`WATCH_USAGE_STAT`): Aggregated usage statistics stored by WatchUsageStat.
 */
class TriageSourceSid
{
    /** PHP error log represented by {@link \WlSdk\Core\Log\CoreLog}. */
    public const ERROR_LOG = 1;

    /** Slow-operation log represented by {@link \WlSdk\Core\Log\CoreLog}. */
    public const SLOW_LOG = 2;

    /** Aggregated usage statistics stored by WatchUsageStat. */
    public const WATCH_USAGE_STAT = 3;
}
