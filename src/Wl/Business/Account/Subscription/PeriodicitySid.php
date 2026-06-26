<?php

namespace WlSdk\Wl\Business\Account\Subscription;

/**
 * List of possible payment periodicity.
 *
 * Values:
 * - 1 (`MONTH`): Payment every month.
 * - 2 (`YEAR`): Payment every year.
 */
class PeriodicitySid
{
    /** Payment every month. */
    public const MONTH = 1;

    /** Payment every year. */
    public const YEAR = 2;
}
