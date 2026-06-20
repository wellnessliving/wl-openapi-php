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
enum RsAppointmentEditConflictSid: int
{
    case EDIT = 3;
    case IGNORE = 1;
    case SKIP = 2;
}
