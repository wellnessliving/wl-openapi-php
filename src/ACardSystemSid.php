<?php
namespace WlSdk;

/**
 * A class for a list of card systems.
 * 
 * Last used id: 14.
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
class ACardSystemSid
{
    /** American Express. */
    const AMERICAN_EXPRESS = 1;
    /** Bank of Montreal (BMO). */
    const BMO = 2;
    /** Canadian Imperial Bank of Commerce (CIBC). */
    const CIBC = 3;
    /** Diners Club International. */
    const DINNER_CLUB = 4;
    /** Discover. */
    const DISCOVER = 5;
    /** HSBC Bank Canada. */
    const HSBC_CANADA = 6;
    /** Japan Credit Bureau (JCB). */
    const JCB = 7;
    /** Mastercard. */
    const MASTERCARD = 8;
    /** Royal Bank of Canada. */
    const ROYAL_BANK = 9;
    /** Scotiabank. */
    const SCOTIBANK = 10;
    /** TD Canada Trust. */
    const TD_CANADA = 11;
    /** The card system can't be determined. */
    const UNDEFINED = 13;
    /** Union Pay. */
    const UNION_PAY = 14;
    /** Visa. */
    const VISA = 12;
}
