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
enum PayProcessorSid: int
{
    case CYBER_SOURCE = 11;
    case DIRECT_CONNECT = 9;
    case LUCY = 2;
    case NETBANX = 1;
    case NMI = 6;
    case NUVEI = 12;
    case PAYCHOICE = 7;
    case STRIPE_COM = 10;
}
