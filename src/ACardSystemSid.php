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
enum ACardSystemSid: int
{
    case AMERICAN_EXPRESS = 1;
    case BMO = 2;
    case CIBC = 3;
    case DINNER_CLUB = 4;
    case DISCOVER = 5;
    case HSBC_CANADA = 6;
    case JCB = 7;
    case MASTERCARD = 8;
    case ROYAL_BANK = 9;
    case SCOTIBANK = 10;
    case TD_CANADA = 11;
    case UNDEFINED = 13;
    case UNION_PAY = 14;
    case VISA = 12;
}
