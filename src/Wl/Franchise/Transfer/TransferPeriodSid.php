<?php

namespace WlSdk\Wl\Franchise\Transfer;

/**
 * Period type of transfer.
 *
 * Values:
 * - 1 (`DAY`): Temporary transfer in days.
 * - 2 (`PERMANENT`): Permanent transfer.
 * - 3 (`RANGE`): Temporary transfer in date range.
 */
class TransferPeriodSid
{
    /** Temporary transfer in days. */
    public const DAY = 1;

    /** Permanent transfer. */
    public const PERMANENT = 2;

    /** Temporary transfer in date range. */
    public const RANGE = 3;
}
