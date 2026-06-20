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
class VaccinationStatusSid
{
    /** Fully Vaccinated. */
    const FULL = 3;
    /** Unvaccinated. */
    const NONE = 1;
    /** Partially Vaccinated. */
    const PARTIAL = 2;
    /** Unknown. */
    const UNKNOWN = 4;
}
