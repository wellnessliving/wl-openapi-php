<?php

namespace WlSdk\Wl\Service;

/**
 * Age restriction statuses.
 *
 * Values:
 * - 2 (`AGE_BETWEEN`): Client age must be between limits.
 * - 1 (`AVAILABLE`): Client is available to book service.
 * - 3 (`MAX_AGE`): Client age must be less then max age.
 * - 4 (`MIN_AGE`): Client age must be great then min age.
 */
class AgeRestrictionStatusSid
{
    /** Client age must be between limits. */
    public const AGE_BETWEEN = 2;

    /** Client is available to book service. */
    public const AVAILABLE = 1;

    /** Client age must be less then max age. */
    public const MAX_AGE = 3;

    /** Client age must be great then min age. */
    public const MIN_AGE = 4;
}
