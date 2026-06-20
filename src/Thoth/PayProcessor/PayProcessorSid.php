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
 * - 7 (`PAYCHOICE`): Payment gateway for http://www.paychoice.com.au/ Paychoice.
 * - 10 (`STRIPE_COM`): Payment gateway for `stripe.com`.
 */
class PayProcessorSid
{
    /** Payment gateway for `cybersource.com`. */
    const CYBER_SOURCE = 11;
    /** Payment gateway for Direct Connect. */
    const DIRECT_CONNECT = 9;
    /** Payment gateway for Lucy. */
    const LUCY = 2;
    /** Payment gateway for Netbanx. */
    const NETBANX = 1;
    /** Payment gateway for NMI. */
    const NMI = 6;
    /** Payment gateway for Nuvei. */
    const NUVEI = 12;
    /** Payment gateway for http://www.paychoice.com.au/ Paychoice. */
    const PAYCHOICE = 7;
    /** Payment gateway for `stripe.com`. */
    const STRIPE_COM = 10;
}
