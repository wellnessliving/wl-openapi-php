<?php

namespace WlSdk\Wl\Franchise\Fee;

/**
 * List of fee types.
 *
 * Last used ID: 2
 *
 * Values:
 * - 1 (`FIXED`): Fixed fee.
 *
 *   Scheduled basis: A fixed amount is transferred to the headquarters balance on every schedule basis.
 *   Per transaction: Fees are fixed regardless of the transaction amount.
 * - 2 (`PERCENTAGE`): Percentage fee.
 *
 *   Scheduled basis: Fees are calculated as a percentage of the location's sales on every schedule basis.
 *   Per transaction: Fees are calculated as a percentage of the transaction amount.
 */
class FeeTypeSid
{
    /** Fixed fee. */
    public const FIXED = 1;

    /** Percentage fee. */
    public const PERCENTAGE = 2;
}
