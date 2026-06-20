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
enum RsClassModifyActionSid: int
{
    case CANCEL = 2;
    case EDIT = 1;
    case RESTORE = 3;
}
