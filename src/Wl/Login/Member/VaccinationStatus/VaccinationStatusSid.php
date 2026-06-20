<?php
namespace WlSdk\Wl\Login\Member\VaccinationStatus;

/**
 * List of member vaccination statuses.
 * 
 * Last used ID: 4
 * 
 * Values:
 * - 3 (`FULL`): Fully Vaccinated.
 * - 1 (`NONE`): Unvaccinated.
 * - 2 (`PARTIAL`): Partially Vaccinated.
 * - 4 (`UNKNOWN`): Unknown.
 */
enum VaccinationStatusSid: int
{
    case FULL = 3;
    case NONE = 1;
    case PARTIAL = 2;
    case UNKNOWN = 4;
}
