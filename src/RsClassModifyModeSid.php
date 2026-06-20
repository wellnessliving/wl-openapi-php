<?php
namespace WlSdk;

/**
 * The list of possible modify mode for class modify wizard.
 * 
 * Values:
 * - 1 (`FULL`): Edit class schedule
 * - 2 (`INSTRUCTOR`): Edit instructor in class schedule
 * - 4 (`RESOURCE_PERIOD`): Asset working hours
 * - 3 (`STAFF_PERIOD`): Staff working hours
 */
class RsClassModifyModeSid
{
    /** Edit class schedule */
    const FULL = 1;
    /** Edit instructor in class schedule */
    const INSTRUCTOR = 2;
    /** Asset working hours */
    const RESOURCE_PERIOD = 4;
    /** Staff working hours */
    const STAFF_PERIOD = 3;
}
