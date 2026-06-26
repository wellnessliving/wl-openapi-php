<?php

namespace WlSdk\Wl\Franchise\Fee;

/**
 * List of apply fee types.
 *
 * Last used ID: 7
 *
 * Values:
 * - 1 (`ACCOUNT_BALANCE`): Apply fees on account balance refill operation.
 * - 2 (`DISCOUNTS`): Apply fee to discount.
 * - 7 (`NON_INTEGRATED`): Apply fee to non-integrated payment methods.
 * - 3 (`SUBTOTAL`): Apply fee to subtotal.
 * - 4 (`SURCHARGES`): Apply fee to surcharges.
 * - 5 (`TAXES`): Apply fee to taxes.
 * - 6 (`TIP`): Apply fee to tips.
 */
class FeeApplySid
{
    /** Apply fees on account balance refill operation. */
    public const ACCOUNT_BALANCE = 1;

    /** Apply fee to discount. */
    public const DISCOUNTS = 2;

    /** Apply fee to non-integrated payment methods. */
    public const NON_INTEGRATED = 7;

    /** Apply fee to subtotal. */
    public const SUBTOTAL = 3;

    /** Apply fee to surcharges. */
    public const SURCHARGES = 4;

    /** Apply fee to taxes. */
    public const TAXES = 5;

    /** Apply fee to tips. */
    public const TIP = 6;
}
