<?php

namespace WlSdk\Thoth\PayProcessor\StripeCom\Terminal;

/**
 * Stripe device type of reader.
 *
 * Values:
 * - 1 (`BBPOS_WISEPAD3`): The BBPOS Wise Pad 3 is a handheld reader for use with mobile applications.
 * - 4 (`BBPOS_WISEPOS_E`): The BBPOS Wise POS E is a countertop reader for Stripe Terminal apps.
 *   It connects to the Stripe Terminal SDK over the internet.
 * - 6 (`SIMULATED_WISEPOS_E`): SIMULATED Wise POS E.
 * - 2 (`STRIPE_M2`): Stripe Reader M2 is a small, robust reader for use with mobile applications.
 */
class StripeReaderModelSid
{
    /** The BBPOS Wise Pad 3 is a handheld reader for use with mobile applications. */
    public const BBPOS_WISEPAD3 = 1;

    /** The BBPOS Wise POS E is a countertop reader for Stripe Terminal apps. */
    public const BBPOS_WISEPOS_E = 4;

    /** SIMULATED Wise POS E. */
    public const SIMULATED_WISEPOS_E = 6;

    /** Stripe Reader M2 is a small, robust reader for use with mobile applications. */
    public const STRIPE_M2 = 2;
}
