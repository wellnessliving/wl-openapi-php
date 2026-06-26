<?php

namespace WlSdk\Wl\Franchise\Transfer;

/**
 * Transfer direction type.
 *
 * Values:
 * - 1 (`IN`): Transfer a member from another location into your location.
 * - 2 (`OUT`): Transfer one of your members to another location.
 */
class TransferDirectionSid
{
    /** Transfer a member from another location into your location. */
    public const IN = 1;

    /** Transfer one of your members to another location. */
    public const OUT = 2;
}
