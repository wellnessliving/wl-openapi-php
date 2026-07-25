<?php

namespace WlSdk\Thoth\WlPay\Cordova;

/**
 * A list of devices supported by credit card reader plugin.
 *
 * <b>*** ATTENTION ***</b> If you modify this class, you should also modify its counterparts in Java and ObjectiveC.
 *
 * Last used ID: 17.
 *
 * Values:
 * - 4 (`DC_IDT_AUGUSTA`): Payment processor: Direct Connect.
 *
 *   Device: `IDTech/Augusta`.
 * - 5 (`DC_IDT_BT_MAG`): Payment processor: Direct Connect.
 *
 *   Device: `IDTech/BTMag`.
 * - 6 (`DC_IDT_UNI_MAG`): Payment processor: Direct Connect.
 *
 *   Device: `IDTech/UniMag`.
 * - 7 (`DC_IDT_UNI_PAY`): Payment processor: Direct Connect.
 *
 *   Device: `IDTech/UniPay`.
 *
 *   Not supported in iOS.
 * - 11 (`DC_MAGTEK_AUDIO`): Payment processor: Direct Connect.
 *
 *   Device: `Magtek`, connection over audio jack. Supported devices: `uDynamo`, `aDynamo`.
 * - 13 (`DC_MAGTEK_BLUETOOTH`): Payment processor: Paragon (ex. Direct Connect).
 *
 *   Device: `Magtek`, bluetooth connection. Supported device - `eDynamo`.
 * - 12 (`DC_MAGTEK_LIGHTNING`): Payment processor: Direct Connect.
 *
 *   Device: `iDynamo` (for iOS only).
 * - 8 (`DC_MIURA`): Payment processor: Direct Connect.
 *
 *   Device: `IDTech/Miura`.
 * - 9 (`DC_PAX`): Payment processor: Direct Connect.
 *
 *   Device: `PAX`.
 *
 *   Documentation says that this device manager is not implemented.
 *   In Direct Connect SDK we see that there is a library for iOS, but not for Android.
 * - 3 (`NMI_ENTERPRISE`): Payment processor: NMI.
 *
 *   Device: Enterprise.
 * - 2 (`NMI_IPS`): Payment processor: NMI.
 *
 *   Device: IPS.
 * - 1 (`NMI_UNIMAG`): Payment processor: NMI.
 *
 *   Device: Unimag.
 * - 17 (`STRIPE_BBPOS_SIMULATED_WISEPOS_E`): Payment processor: Stripe.
 *
 *   Device: Simulated BBPOS WisePOS E.
 * - 14 (`STRIPE_BBPOS_WISEPAD_3_BLUETOOTH`): Payment processor: Stripe.
 *
 *   Device: BBPOS Wisepad 3.
 * - 15 (`STRIPE_BBPOS_WISEPOS_E_INTERNET`): Payment processor: Stripe.
 *
 *   Device: BBPOS WisePOS E.
 * - 16 (`STRIPE_READER_M2_BLUETOOTH`): Payment processor: Stripe.
 *
 *   Device: Stripe Reader M2.
 * - 10 (`VIRTUAL`): Virtual device for testing purposes.
 *
 *   Currently supported only by Direct Connect.
 */
class CordovaCcrDeviceSid
{
    /** Payment processor: Direct Connect. */
    public const DC_IDT_AUGUSTA = 4;

    /** Payment processor: Direct Connect. */
    public const DC_IDT_BT_MAG = 5;

    /** Payment processor: Direct Connect. */
    public const DC_IDT_UNI_MAG = 6;

    /** Payment processor: Direct Connect. */
    public const DC_IDT_UNI_PAY = 7;

    /** Payment processor: Direct Connect. */
    public const DC_MAGTEK_AUDIO = 11;

    /** Payment processor: Paragon (ex. Direct Connect). */
    public const DC_MAGTEK_BLUETOOTH = 13;

    /** Payment processor: Direct Connect. */
    public const DC_MAGTEK_LIGHTNING = 12;

    /** Payment processor: Direct Connect. */
    public const DC_MIURA = 8;

    /** Payment processor: Direct Connect. */
    public const DC_PAX = 9;

    /** Payment processor: NMI. */
    public const NMI_ENTERPRISE = 3;

    /** Payment processor: NMI. */
    public const NMI_IPS = 2;

    /** Payment processor: NMI. */
    public const NMI_UNIMAG = 1;

    /** Payment processor: Stripe. */
    public const STRIPE_BBPOS_SIMULATED_WISEPOS_E = 17;

    /** Payment processor: Stripe. */
    public const STRIPE_BBPOS_WISEPAD_3_BLUETOOTH = 14;

    /** Payment processor: Stripe. */
    public const STRIPE_BBPOS_WISEPOS_E_INTERNET = 15;

    /** Payment processor: Stripe. */
    public const STRIPE_READER_M2_BLUETOOTH = 16;

    /** Virtual device for testing purposes. */
    public const VIRTUAL = 10;
}
