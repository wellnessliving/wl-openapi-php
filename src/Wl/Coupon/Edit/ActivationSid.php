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
enum ActivationSid: int
{
    case DAY = 7;
    case FIXED = 3;
    case SALE = 1;
}
