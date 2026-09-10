<?php

namespace WlSdk;

/**
 * List of possible pay roles.
 *
 * Last used ID: 6.
 *
 * Values:
 * - 1 (`CLIENT`): `Pay Per Client` pay role.
 * - 2 (`COMMISSION`): `Commission` pay role.
 * - 3 (`EVENT`): `Pay Per Event` pay role.
 * - 4 (`HOUR`): `Hourly` pay role.
 * - 5 (`RANGE`): <tt>Pay Per Client Range<tt> pay role.
 * - 6 (`TIERED_RANGE`): <tt>Tiered Pay Per Client Range<tt> pay role.
 */
class RsStaffPaySid
{
    /** `Pay Per Client` pay role. */
    public const CLIENT = 1;

    /** `Commission` pay role. */
    public const COMMISSION = 2;

    /** `Pay Per Event` pay role. */
    public const EVENT = 3;

    /** `Hourly` pay role. */
    public const HOUR = 4;

    /** <tt>Pay Per Client Range<tt> pay role. */
    public const RANGE = 5;

    /** <tt>Tiered Pay Per Client Range<tt> pay role. */
    public const TIERED_RANGE = 6;
}
