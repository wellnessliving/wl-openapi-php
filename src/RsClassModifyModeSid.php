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
enum RsClassModifyModeSid: int
{
    case FULL = 1;
    case INSTRUCTOR = 2;
    case RESOURCE_PERIOD = 4;
    case STAFF_PERIOD = 3;
}
