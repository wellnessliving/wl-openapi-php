<?php
namespace WlSdk\Wl\Classes\Tab;

/**
 * List of class tab objects.
 * 
 * Last ID: 6.
 * 
 * Values:
 * - 2 (`ENROLLMENT`): Enrolments.
 * - 4 (`RESOURCE`): Bookable Assets.
 * - 3 (`SERVICE`): Appointments.
 * - 1 (`TRAINING`): Classes.
 */
enum TabSid: int
{
    case ENROLLMENT = 2;
    case RESOURCE = 4;
    case SERVICE = 3;
    case TRAINING = 1;
}
