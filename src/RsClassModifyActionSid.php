<?php
namespace WlSdk;

/**
 * The list of possible actions for class modify wizard.
 * 
 * Values:
 * - 2 (`CANCEL`): Cancel class schedule.
 * - 1 (`EDIT`): Change class schedule.
 * - 3 (`RESTORE`): Restore cancelled schedule.
 */
class RsClassModifyActionSid
{
    /** Cancel class schedule. */
    const CANCEL = 2;
    /** Change class schedule. */
    const EDIT = 1;
    /** Restore cancelled schedule. */
    const RESTORE = 3;
}
