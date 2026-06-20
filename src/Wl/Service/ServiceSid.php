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
class ServiceSid
{
    /** Appointment. */
    const APPOINTMENT = 1;
    /** Belts. */
    const BELT = 6;
    /** Bookable asset. */
    const BOOKABLE_ASSET = 4;
    /** Class. */
    const CLASSES = 2;
    /** Event. */
    const EVENT = 3;
    /** Gym visits. */
    const GYM = 5;
}
