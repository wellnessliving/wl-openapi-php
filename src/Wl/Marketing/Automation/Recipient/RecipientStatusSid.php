<?php

namespace WlSdk\Wl\Marketing\Automation\Recipient;

/**
 * List of recipient statuses.
 *
 * Last used ID: 5.
 *
 * Values:
 * - 3 (`CRITERIA_EXIT`): 'Exit' status.
 *   Set when the recipient met exit criteria of the automation.
 * - 1 (`EXCLUDED`): 'Excluded' status.
 *   Set when the recipient is excluded from the automation manually or automatically.
 * - 2 (`FINISHED`): 'Finished' status.
 *   Set when the recipient completed all steps of the automation.
 * - 4 (`IN_PROGRESS`): 'In Progress' status.
 *   Set when the recipient is currently going through the automation.
 */
class RecipientStatusSid
{
    /** 'Exit' status. */
    public const CRITERIA_EXIT = 3;

    /** 'Excluded' status. */
    public const EXCLUDED = 1;

    /** 'Finished' status. */
    public const FINISHED = 2;

    /** 'In Progress' status. */
    public const IN_PROGRESS = 4;
}
