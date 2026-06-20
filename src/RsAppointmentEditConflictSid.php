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
    const EDIT = 3;
    /** Ignore this conflict and create event as it is. */
    const IGNORE = 1;
    /** Do not create conflicted event. */
    const SKIP = 2;
}
