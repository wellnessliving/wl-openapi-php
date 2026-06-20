<?php
namespace WlSdk\Wl\Resource;

/**
 * List of resource categories.
 * 
 * Values:
 * - 1 (`ASSET`): Asset resource category.
 * - 2 (`LOCATION`): Off-site location resource category.
 */
enum ResourceCategoryEnum: int
{
    case ASSET = 1;
    case LOCATION = 2;
}
