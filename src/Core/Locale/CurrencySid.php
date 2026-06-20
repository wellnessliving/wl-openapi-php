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
class CurrencySid
{
    /** United Arab Emirates dirham. */
    const AED = 11;
    /** Australian dollar. */
    const AUD = 6;
    /** Bermudian Dollar. */
    const BMD = 18;
    /** Bahamian dollar. */
    const BSD = 19;
    /** Canadian dollar. */
    const CAD = 4;
    /** Egypt Pound. */
    const EGP = 8;
    /** Euro. */
    const EUR = 13;
    /** British pound. */
    const GBP = 3;
    /** Kuwaiti dinar. */
    const KWD = 14;
    /** Cayman Islands dollar. */
    const KYD = 5;
    /** Mauritian Rupee. */
    const MUR = 16;
    /** New Zealand Dollar. */
    const NZD = 10;
    /** Philippines Pesco. */
    const PHP = 12;
    /** Saudi Riyal. */
    const SAR = 15;
    /** Singapore dollar. */
    const SGD = 20;
    /** Unknown code. */
    const UNKNOWN = 2;
    /** US dollars. */
    const USD = 1;
    /** West African CFA franc. */
    const XOF = 17;
    /** South African rand. */
    const ZAR = 7;
}
