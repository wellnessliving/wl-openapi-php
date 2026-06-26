<?php

namespace WlSdk\Wl\Franchise\Fee;

/**
 * List of fee schedule types.
 *
 * Last used ID: 2
 *
 * Values:
 * - 2 (`SCHEDULE`): Scheduled basis.
 *
 *   Fees are calculated on a scheduled basis and transferred in batches to the headquarters balance.
 * - 1 (`TRANSACTION`): Per transaction.
 *
 *   Fees are calculated on each transaction processed and immediately transferred to the headquarters balance.
 */
class FeeScheduleSid
{
    /** Scheduled basis. */
    public const SCHEDULE = 2;

    /** Per transaction. */
    public const TRANSACTION = 1;
}
