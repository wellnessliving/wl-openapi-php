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
class FilterSortSid
{
    /** Sort alphabetically. */
    public const ALPHABET = 1;

    /** Sort by custom. */
    public const CUSTOM = 4;

    /** Sort by most recently added. */
    public const RECENT = 2;

    /** Sorted by number of views. */
    public const VIEW = 3;
}
