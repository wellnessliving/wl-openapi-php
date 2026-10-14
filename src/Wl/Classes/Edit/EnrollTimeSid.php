<?php

namespace WlSdk\Wl\Classes\Edit;

/**
 * Event time enrollment rules.
 * Influence only block events.
 *
 * Values:
 * - 1 (`PROGRESS_DENY`): Deny enrollment of the event that is in progress.
 * - 3 (`PROGRESS_FULL`): Allow enrollment to event in progress with full payment.
 * - 2 (`PROGRESS_PRORATE`): Allow enrollment to event in progress with prorated payment.
 */
class EnrollTimeSid
{
    /** Deny enrollment of the event that is in progress. */
    public const PROGRESS_DENY = 1;

    /** Allow enrollment to event in progress with full payment. */
    public const PROGRESS_FULL = 3;

    /** Allow enrollment to event in progress with prorated payment. */
    public const PROGRESS_PRORATE = 2;
}
