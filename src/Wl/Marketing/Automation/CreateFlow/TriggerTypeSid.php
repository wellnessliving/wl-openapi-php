<?php

namespace WlSdk\Wl\Marketing\Automation\CreateFlow;

/**
 * Types of triggers.
 *
 * Last used ID: 4.
 *
 * Values:
 * - 1 (`CLIENT_ACTIVITY`): Client activity triggers.
 * - 2 (`PROFILE_CHANGE`): Profile change triggers.
 * - 3 (`PURCHASE_STATUS`): Purchase status triggers.
 * - 4 (`SERVICE_UPDATE`): Service update triggers.
 */
class TriggerTypeSid
{
    /** Client activity triggers. */
    public const CLIENT_ACTIVITY = 1;

    /** Profile change triggers. */
    public const PROFILE_CHANGE = 2;

    /** Purchase status triggers. */
    public const PURCHASE_STATUS = 3;

    /** Service update triggers. */
    public const SERVICE_UPDATE = 4;
}
