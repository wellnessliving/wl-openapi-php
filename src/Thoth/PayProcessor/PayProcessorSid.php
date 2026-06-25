<?php

namespace WlSdk\Thoth\PayProcessor;

/**
 * A list of payment gateways or processors.
 *
 * Values:
 * - 11 (`CYBER_SOURCE`): Payment gateway for `cybersource.com`.
 * - 9 (`DIRECT_CONNECT`): Payment gateway for Direct Connect.
 * - 2 (`LUCY`): Payment gateway for Lucy.
 * - 1 (`NETBANX`): Payment gateway for Netbanx.
 * - 6 (`NMI`): Payment gateway for NMI.
 * - 12 (`NUVEI`): Payment gateway for Nuvei.
 * - 7 (`PAYCHOICE`): Payment gateway for Paychoice.
 * - 10 (`STRIPE_COM`): Payment gateway for `stripe.com`.
 */
class PayProcessorSid
{
    /** Payment gateway for `cybersource.com`. */
    public const CYBER_SOURCE = 11;

    /** Payment gateway for Direct Connect. */
    public const DIRECT_CONNECT = 9;

    /** Payment gateway for Lucy. */
    public const LUCY = 2;

    /** Payment gateway for Netbanx. */
    public const NETBANX = 1;

    /** Payment gateway for NMI. */
    public const NMI = 6;

    /** Payment gateway for Nuvei. */
    public const NUVEI = 12;

    /** Payment gateway for Paychoice. */
    public const PAYCHOICE = 7;

    /** Payment gateway for `stripe.com`. */
    public const STRIPE_COM = 10;
}
