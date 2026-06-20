<?php
namespace WlSdk\Wl\Service;

/**
 * A list of services.
 * 
 * Last used ID: 6.
 * 
 * Values:
 * - 1 (`APPOINTMENT`): Appointment.
 * - 6 (`BELT`): Belts.
 * - 4 (`BOOKABLE_ASSET`): Bookable asset.
 * - 2 (`CLASSES`): Class.
 * - 3 (`EVENT`): Event.
 * - 5 (`GYM`): Gym visits.
 */
enum ServiceSid: int
{
    case APPOINTMENT = 1;
    case BELT = 6;
    case BOOKABLE_ASSET = 4;
    case CLASSES = 2;
    case EVENT = 3;
    case GYM = 5;
}
