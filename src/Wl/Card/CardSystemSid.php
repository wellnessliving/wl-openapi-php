<?php

namespace WlSdk\Wl\Card;

/**
 * A list of card types.
 *
 * Values:
 * - 1 (`AMERICAN_EXPRESS`): American Express.
 * - 2 (`BMO`): Bank of Montreal (BMO).
 * - 3 (`CIBC`): Canadian Imperial Bank of Commerce (CIBC).
 * - 4 (`DINNER_CLUB`): Diners Club International.
 * - 5 (`DISCOVER`): Discover.
 * - 6 (`HSBC_CANADA`): HSBC Bank Canada.
 * - 7 (`JCB`): Japan Credit Bureau (JCB).
 * - 8 (`MASTERCARD`): Mastercard.
 * - 9 (`ROYAL_BANK`): Royal Bank of Canada.
 * - 10 (`SCOTIBANK`): Scotiabank.
 * - 11 (`TD_CANADA`): TD Canada Trust.
 * - 13 (`UNDEFINED`): The card system can't be determined.
 * - 14 (`UNION_PAY`): Union Pay.
 * - 12 (`VISA`): Visa.
 */
class CardSystemSid
{
    /** American Express. */
    public const AMERICAN_EXPRESS = 1;

    /** Bank of Montreal (BMO). */
    public const BMO = 2;

    /** Canadian Imperial Bank of Commerce (CIBC). */
    public const CIBC = 3;

    /** Diners Club International. */
    public const DINNER_CLUB = 4;

    /** Discover. */
    public const DISCOVER = 5;

    /** HSBC Bank Canada. */
    public const HSBC_CANADA = 6;

    /** Japan Credit Bureau (JCB). */
    public const JCB = 7;

    /** Mastercard. */
    public const MASTERCARD = 8;

    /** Royal Bank of Canada. */
    public const ROYAL_BANK = 9;

    /** Scotiabank. */
    public const SCOTIBANK = 10;

    /** TD Canada Trust. */
    public const TD_CANADA = 11;

    /** The card system can't be determined. */
    public const UNDEFINED = 13;

    /** Union Pay. */
    public const UNION_PAY = 14;

    /** Visa. */
    public const VISA = 12;
}
