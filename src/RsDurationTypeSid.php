<?php

namespace WlSdk;

/**
 * Class to process string identifiers for duration types
 *
 * Last ID: 3.
 *
 * Values:
 * - 2 (`DATE`): Specific date. Example, 2013-12-24.
 * - 3 (`ETERNAL`): No ending date.
 * - 1 (`PERIOD`): Examples: 12 days, 2 months, 2 hours etc.
 */
class RsDurationTypeSid
{
    /** Specific date. Example, 2013-12-24. */
    public const DATE = 2;

    /** No ending date. */
    public const ETERNAL = 3;

    /** Examples: 12 days, 2 months, 2 hours etc. */
    public const PERIOD = 1;
}
