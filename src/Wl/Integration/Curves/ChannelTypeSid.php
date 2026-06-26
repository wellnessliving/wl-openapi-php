<?php

namespace WlSdk\Wl\Integration\Curves;

/**
 * Curves channel type.
 *
 * Last used ID: 5
 *
 * Values:
 * - 1 (`ALTERNATIVE`): Alternative.
 * - 2 (`EMPLOYER`): Employer.
 * - 3 (`HCP`): HCP.
 * - 4 (`HEALTH_PLAN`): Health Plan.
 * - 5 (`WELLNESS_PROGRAM`): Wellness Company.
 */
class ChannelTypeSid
{
    /** Alternative. */
    public const ALTERNATIVE = 1;

    /** Employer. */
    public const EMPLOYER = 2;

    /** HCP. */
    public const HCP = 3;

    /** Health Plan. */
    public const HEALTH_PLAN = 4;

    /** Wellness Company. */
    public const WELLNESS_PROGRAM = 5;
}
