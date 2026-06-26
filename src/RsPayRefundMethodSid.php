<?php

namespace WlSdk;

/**
 * A list of refund destinations.
 *
 * Values:
 * - 2 (`ACCOUNT`): Money should be returned to user's account.
 * - 3 (`CASH`): Money should be returned as cash.
 * - 1 (`SELF`): Payment source should be used as refund destination.
 *
 *   Only applicable to payment sources that are listed in
 * [RsPayMethodSid::refund()](#/components/schemas/RsPayMethodSid).
 *
 *   <b>Be attentive!</b> All those methods should also be added to RsPayRefundAbstract::create().
 * - 4 (`VOID`): Same as [RsPayRefundMethodSid::SELF](#/components/schemas/RsPayRefundMethodSid), but for payment
 * methods that does not support automatic refund.
 *
 *   During transaction voiding money should be returned with the same payment method that has been used to pay for.
 *
 *   Method [RsPayRefundMethodSid::SELF](#/components/schemas/RsPayRefundMethodSid) is available only for automatic
 * methods with api and real money
 *   movement. For all other methods like cash, pin pads, checks, this method should be used.
 */
class RsPayRefundMethodSid
{
    /** Money should be returned to user's account. */
    public const ACCOUNT = 2;

    /** Money should be returned as cash. */
    public const CASH = 3;

    /** Payment source should be used as refund destination. */
    public const SELF = 1;

    /** Same as [RsPayRefundMethodSid::SELF](#/components/schemas/RsPayRefundMethodSid), but for payment methods that does not support automatic refund. */
    public const VOID = 4;
}
