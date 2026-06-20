<?php
namespace WlSdk\Wl\Business\Franchise\Location;

/**
 * Types of the location.
 * 
 * Used in the [BusinessFranchiseLocationApi](/Wl/Business/Franchise/Location/BusinessFranchiseLocation.json).
 * 
 * Values:
 * - 1 (`ALL`): All locations.
 * - 2 (`REGION_NO`): Locations without the region.
 * - 3 (`REGION_YES`): Location with the region.
 */
class BusinessFranchiseLocationSid
{
    /** All locations. */
    const ALL = 1;
    /** Locations without the region. */
    const REGION_NO = 2;
    /** Location with the region. */
    const REGION_YES = 3;
}
