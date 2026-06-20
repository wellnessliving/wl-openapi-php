<?php

namespace WlSdk;

/**
 * List of possible ways to solve a conflict.
 *
 * Values:
 * - 3 (`EDIT`): Create an event with other staff, date or time.
 * - 1 (`IGNORE`): Ignore this conflict and create event as it is.
 * - 2 (`SKIP`): Do not create conflicted event.
 */
class RsAppointmentEditConflictSid
{
    /** Create an event with other staff, date or time. */
    public const EDIT = 3;

    /** Ignore this conflict and create event as it is. */
    public const IGNORE = 1;

    /** Do not create conflicted event. */
    public const SKIP = 2;
}
