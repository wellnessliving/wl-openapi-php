<?php
namespace WlSdk;

/**
 * A class for filter states for flagged fields.
 * For example, the filter for the field "`is_active`" always has three states: Only active, Only inactive, and All.
 * 
 * Values:
 * - 1 (`ALL`): All records.
 * - 2 (`OFF`): Records with the flag turned off.
 * - 3 (`ON`): Records with the flag turned on.
 */
enum AFlagSid: int
{
    case ALL = 1;
    case OFF = 2;
    case ON = 3;
}
