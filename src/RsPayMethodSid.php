<?php
namespace WlSdk;

/**
 * A list of payment methods.
 * 
 * 
 * 
 * Last used ID: 13.
 * 
 * Values:
 * - 7 (`ACCOUNT`): Payment with personal user account (rs.pay.account).
 * - 9 (`ACH`): ACH system (USA-specific direct banking transactions).
 * - 4 (`CASH`): Payment with cash.
 * - 5 (`CHEQUE`): Payment with a cheque.
 * - 8 (`COUPON`): Payment with a coupon.
 * - 10 (`DIRECT_ENTRY`): Direct Entry system (australian-specific direct banking transactions).
 * - 2 (`ECOMMERCE`): Online payment. Card not present.
 * - 6 (`EXTERNAL`): Payment with an external terminal.
 * - 11 (`IMPORT_ACCRUAL`): Special method to be used for migration process.
 * 
 *   There are sales in Mindbody that were not bought using account balance or reward points.
 *   This is not real revenue and cannot be imported as real sales. So, they can be imported as this special method
 *   to be in the system and to allow business owner to hide on sales report.
 * 
 *   In online store this method should not be available.
 * - 1 (`POS`): Payment method at a Points of sale.
 */
class RsPayMethodSid
{
    /** Payment with personal user account (rs.pay.account). */
    const ACCOUNT = 7;
    /** ACH system (USA-specific direct banking transactions). */
    const ACH = 9;
    /** Payment with cash. */
    const CASH = 4;
    /** Payment with a cheque. */
    const CHEQUE = 5;
    /** Payment with a coupon. */
    const COUPON = 8;
    /** Direct Entry system (australian-specific direct banking transactions). */
    const DIRECT_ENTRY = 10;
    /** Online payment. Card not present. */
    const ECOMMERCE = 2;
    /** Payment with an external terminal. */
    const EXTERNAL = 6;
    /** Special method to be used for migration process. */
    const IMPORT_ACCRUAL = 11;
    /** Payment method at a Points of sale. */
    const POS = 1;
}
