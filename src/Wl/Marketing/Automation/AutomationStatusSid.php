<?php

namespace WlSdk\Wl\Marketing\Automation;

/**
 * Automation status identifiers.
 *
 * Last used id: 3.
 *
 * Values:
 * - 1 (`ACTIVE`): The automation is active.
 * - 3 (`DRAFT`): The automation is a draft.
 * - 2 (`INACTIVE`): The automation is inactive.
 */
class AutomationStatusSid
{
    /** The automation is active. */
    public const ACTIVE = 1;

    /** The automation is a draft. */
    public const DRAFT = 3;

    /** The automation is inactive. */
    public const INACTIVE = 2;
}
