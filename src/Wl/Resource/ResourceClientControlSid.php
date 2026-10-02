<?php

namespace WlSdk\Wl\Resource;

/**
 * A list of resource selection type.
 *
 * Values:
 * - 2 (`OFF`): Means that client cannot select resource during booking process.
 * - 1 (`ON`): Means that client can select resource during booking process.
 */
class ResourceClientControlSid
{
    /** Means that client cannot select resource during booking process. */
    public const OFF = 2;

    /** Means that client can select resource during booking process. */
    public const ON = 1;
}
