<?php

namespace WlSdk\Wl\Backend\Setup\Staffs;

/**
 * List of Setup->Staff->Staff members sort options.
 *
 * Values:
 * - 3 (`CUSTOM`): Sort by staffs order.
 * - 2 (`DATE`): Sort by date created.
 * - 1 (`NAME`): Sort by name/title.
 *   Each entity can be sorted by name/title.
 */
class StaffsSortSid
{
    /** Sort by staffs order. */
    public const CUSTOM = 3;

    /** Sort by date created. */
    public const DATE = 2;

    /** Sort by name/title. */
    public const NAME = 1;
}
