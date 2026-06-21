<?php

namespace WlSdk\Wl\Coupon\Edit;

/**
 * Coupon date start rule.
 * sale - date start is a date of the sale
 * fixed - date start is fixed by coupon settings
 *
 * Values:
 * - 7 (`DAY`): Number of a day of the month or of the week.
 * - 3 (`FIXED`): Custom date.
 * - 1 (`SALE`): Date of the sale.
 */
class ActivationSid
{
    /** Number of a day of the month or of the week. */
    public const DAY = 7;

    /** Custom date. */
    public const FIXED = 3;

    /** Date of the sale. */
    public const SALE = 1;
}
