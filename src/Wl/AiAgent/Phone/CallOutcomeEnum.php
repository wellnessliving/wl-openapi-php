<?php

namespace WlSdk\Wl\AiAgent\Phone;

/**
 * List of outcomes of a CAASI Phone Agent call.
 *
 * Values:
 * - 1 (`RESOLVED`): The call was resolved by CAASI without staff involvement.
 * - 2 (`TRANSFERRED`): The call was transferred to a live staff member.
 * - 3 (`CALLBACK_REQUESTED`): The caller requested a callback from staff.
 */
class CallOutcomeEnum
{
    /** The call was resolved by CAASI without staff involvement. */
    public const RESOLVED = 1;

    /** The call was transferred to a live staff member. */
    public const TRANSFERRED = 2;

    /** The caller requested a callback from staff. */
    public const CALLBACK_REQUESTED = 3;
}
