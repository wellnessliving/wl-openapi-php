<?php
namespace WlSdk\Wl\Video\Catalog\Filter\Sort;

/**
 * List of video catalog sorting types.
 * 
 * Any selected type should be sorted in descending order.
 * 
 * Values:
 * - 1 (`ALPHABET`): Sort alphabetically.
 * - 4 (`CUSTOM`): Sort by custom.
 * - 2 (`RECENT`): Sort by most recently added.
 * - 3 (`VIEW`): Sorted by number of views.
 */
enum FilterSortSid: int
{
    case ALPHABET = 1;
    case CUSTOM = 4;
    case RECENT = 2;
    case VIEW = 3;
}
