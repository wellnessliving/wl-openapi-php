<?php

namespace WlSdk;

/**
 * A list of currency codes.
 *
 * When you add a currency, add also the following:<ul>
 *   <li>Image in `rs.pay/html/img/pay-amount-input-*.png`</li>
 *   <li>Currency in `rs.pay.amount.input.less`</li>
 * </ul>
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
class RsCurrencySid
{
    /** United Arab Emirates dirham. */
    public const AED = 11;

    /** Australian dollar. */
    public const AUD = 6;

    /** Bermudian Dollar. */
    public const BMD = 18;

    /** Bahamian dollar. */
    public const BSD = 19;

    /** Canadian dollar. */
    public const CAD = 4;

    /** Egypt Pound. */
    public const EGP = 8;

    /** Euro. */
    public const EUR = 13;

    /** British pound. */
    public const GBP = 3;

    /** Kuwaiti dinar. */
    public const KWD = 14;

    /** Cayman Islands dollar. */
    public const KYD = 5;

    /** Mauritian Rupee. */
    public const MUR = 16;

    /** New Zealand Dollar. */
    public const NZD = 10;

    /** Philippines Pesco. */
    public const PHP = 12;

    /** Saudi Riyal. */
    public const SAR = 15;

    /** Singapore dollar. */
    public const SGD = 20;

    /** Unknown code. */
    public const UNKNOWN = 2;

    /** US dollars. */
    public const USD = 1;

    /** West African CFA franc. */
    public const XOF = 17;

    /** South African rand. */
    public const ZAR = 7;
}
