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
    public const APPOINTMENT = 1;

    /** Belts. */
    public const BELT = 6;

    /** Bookable asset. */
    public const BOOKABLE_ASSET = 4;

    /** Class. */
    public const CLASSES = 2;

    /** Event. */
    public const EVENT = 3;

    /** Gym visits. */
    public const GYM = 5;
}
