<?php
namespace WlSdk;

/**
 * Promotion or package date start rule.
 * 
 * sale - date start is a date of the sale.
 * redeem - date start is a date of the first client visit by this promotion or package.
 * fixed - date start is fixed by promotion or package settings and saved in DB.
 * 
 * Values:
 * - 7 (`DAY`): Number of a day of the month or of the week.
 * - 3 (`FIXED`): Custom date.
 * - 4 (`MONTH_FIRST`): The first day of month.
 * - 6 (`MONTH_HALF`): The 15th day of the month.
 * - 5 (`MONTH_LAST`): The last day of the month.
 * - 1 (`SALE`): Date of the sale.
 * - 2 (`VISIT`): Date of the first visit.
 */
enum RsActivationSid: int
{
    case DAY = 7;
    case FIXED = 3;
    case MONTH_FIRST = 4;
    case MONTH_HALF = 6;
    case MONTH_LAST = 5;
    case SALE = 1;
    case VISIT = 2;
}
