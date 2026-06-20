<?php

namespace WlSdk;

/**
 * Identifiers for services types.
 *
 * Last used ID: 5.
 *
 * Values:
 * - 1 (`APPOINTMENT`): Appointments.
 * - 2 (`CLASSES`): Classes.
 * - 3 (`ENROLLMENT`): Enrolments.
 * - 5 (`RESOURCE`): Resources.
 * - 4 (`VISIT`): Visits.
 */
class RsServiceSid
{
    /** Appointments. */
    public const APPOINTMENT = 1;

    /** Classes. */
    public const CLASSES = 2;

    /** Enrolments. */
    public const ENROLLMENT = 3;

    /** Resources. */
    public const RESOURCE = 5;

    /** Visits. */
    public const VISIT = 4;
}
