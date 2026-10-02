<?php

namespace WlSdk\Wl\Resource;

/**
 * A list of resource usage types.
 *
 * Values:
 * - 1 (`INDIVIDUAL`): Means that resource used in individual usage.
 * - 2 (`SHARE`): Resource is reserved for the entire class.
 */
class ResourceUseSid
{
    /** Means that resource used in individual usage. */
    public const INDIVIDUAL = 1;

    /** Resource is reserved for the entire class. */
    public const SHARE = 2;
}
