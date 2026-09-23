<?php

namespace WlSdk\Wl\Promotion\Pay;

/**
 * Contains a list of schemes of processing of on-hold periods.
 *
 *
 *
 * Last used ID: 4
 *
 * Values:
 * - 2 (`MINDBODY`): Mindbody scheme.
 *
 *   Payment amounts for all payment periods are the same.
 *
 *   Periods containing on-hold days are extended. Payment dates of future periods are moved forward.
 * - 1 (`WL`): WellnessLiving scheme (default).
 *
 *   Payments happen on the same date.
 *
 *   Price of periods containing on-hold dates is prorated.
 *
 *   Payments fall on an on-hold date are skipped. Skipped payment amount is added to the next payment.
 * - 3 (`WL_STICK`): WellnessLiving scheme in which payments that fall on a suspended day, are not skipped.
 *   Instead, they are moved to the first active day.
 * - 4 (`WL_STRICT_SCHEDULE`): Scheme in which payments continue on schedule with standard amount regardless of pauses.
 *
 *   Periods containing hold days remain the same length except for the last period before renewal.
 *   Hold days are added to the last period before renewal.
 */
class PromotionPayHoldSid
{
    /** Mindbody scheme. */
    public const MINDBODY = 2;

    /** WellnessLiving scheme (default). */
    public const WL = 1;

    /** WellnessLiving scheme in which payments that fall on a suspended day, are not skipped. */
    public const WL_STICK = 3;

    /** Scheme in which payments continue on schedule with standard amount regardless of pauses. */
    public const WL_STRICT_SCHEDULE = 4;
}
