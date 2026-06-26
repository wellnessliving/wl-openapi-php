<?php

namespace WlSdk\Core\Log;

/**
 * A list of types of log records.
 *
 * Values:
 * - 2 (`ERROR`): An error.
 * - 1 (`FATAL`): Fatal error.
 * - 5 (`INFO`): Information.
 * - 4 (`NOTICE`): Notice.
 * - 3 (`WARNING`): Warning.
 */
class LogTypeSid
{
    /** An error. */
    public const ERROR = 2;

    /** Fatal error. */
    public const FATAL = 1;

    /** Information. */
    public const INFO = 5;

    /** Notice. */
    public const NOTICE = 4;

    /** Warning. */
    public const WARNING = 3;
}
