<?php
namespace WlSdk\Core\Locale;

/**
 * A list of currencies.
 * 
 * Currency constant names must comply with the standard `ISO 4217` for correct integration with other services.
 * 
 * Values:
 * - 11 (`AED`): United Arab Emirates dirham.
 * - 6 (`AUD`): Australian dollar.
 * - 18 (`BMD`): Bermudian Dollar.
 * - 19 (`BSD`): Bahamian dollar.
 * - 4 (`CAD`): Canadian dollar.
 * - 8 (`EGP`): Egypt Pound.
 * - 13 (`EUR`): Euro.
 * - 3 (`GBP`): British pound.
 * - 14 (`KWD`): Kuwaiti dinar.
 * - 5 (`KYD`): Cayman Islands dollar.
 * - 16 (`MUR`): Mauritian Rupee.
 * - 10 (`NZD`): New Zealand Dollar.
 * - 12 (`PHP`): Philippines Pesco.
 * - 15 (`SAR`): Saudi Riyal.
 * - 20 (`SGD`): Singapore dollar.
 * - 2 (`UNKNOWN`): Unknown code.
 * 
 *   Used when currency is not specified or is not known.
 * - 1 (`USD`): US dollars.
 * - 17 (`XOF`): West African CFA franc.
 * 
 *   Is used in Senegal.
 * - 7 (`ZAR`): South African rand.
 */
enum CurrencySid: int
{
    case AED = 11;
    case AUD = 6;
    case BMD = 18;
    case BSD = 19;
    case CAD = 4;
    case EGP = 8;
    case EUR = 13;
    case GBP = 3;
    case KWD = 14;
    case KYD = 5;
    case MUR = 16;
    case NZD = 10;
    case PHP = 12;
    case SAR = 15;
    case SGD = 20;
    case UNKNOWN = 2;
    case USD = 1;
    case XOF = 17;
    case ZAR = 7;
}
