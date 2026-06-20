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
enum RsServiceSid: int
{
    case APPOINTMENT = 1;
    case CLASSES = 2;
    case ENROLLMENT = 3;
    case RESOURCE = 5;
    case VISIT = 4;
}
