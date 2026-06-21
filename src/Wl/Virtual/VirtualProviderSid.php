<?php

namespace WlSdk\Wl\Virtual;

/**
 * List of possible value of virtual integrations.
 *
 * Last used ID: 2.
 *
 * Values:
 * - 2 (`NON_INTEGRATED`): Virtual integration non implemented.
 * - 1 (`ZOOM`): Virtual Zoom service integration.
 */
class VirtualProviderSid
{
    /** Virtual integration non implemented. */
    public const NON_INTEGRATED = 2;

    /** Virtual Zoom service integration. */
    public const ZOOM = 1;
}
