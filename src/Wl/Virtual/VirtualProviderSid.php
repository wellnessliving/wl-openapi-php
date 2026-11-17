<?php

namespace WlSdk\Wl\Virtual;

/**
 * List of possible value of virtual integrations.
 *
 * Last used ID: 4.
 *
 * Values:
 * - 4 (`IN_PERSON`): The service is delivered in person.
 *
 *   Never stored in the table of virtual services and never offered as a separate card.
 * - 2 (`NON_INTEGRATED`): Virtual integration non implemented.
 * - 3 (`PHONE_CALL`): Staff call the client at the number given at booking.
 *
 *   Available for appointments only.
 * - 1 (`ZOOM`): Virtual Zoom service integration.
 */
class VirtualProviderSid
{
    /** The service is delivered in person. */
    public const IN_PERSON = 4;

    /** Virtual integration non implemented. */
    public const NON_INTEGRATED = 2;

    /** Staff call the client at the number given at booking. */
    public const PHONE_CALL = 3;

    /** Virtual Zoom service integration. */
    public const ZOOM = 1;
}
