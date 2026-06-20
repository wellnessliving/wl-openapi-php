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
enum BusinessFranchiseLocationSid: int
{
    case ALL = 1;
    case REGION_NO = 2;
    case REGION_YES = 3;
}
