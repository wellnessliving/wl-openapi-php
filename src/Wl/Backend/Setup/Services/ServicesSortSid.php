<?php

namespace WlSdk\Wl\Backend\Setup\Services;

/**
 * List of Setup->Appointments sort options.
 *
 * Values:
 * - 4 (`CUSTOM`): Sort by services order.
 * - 2 (`DURATION`): Sort by duration.
 * - 3 (`PRICE`): Sort by price.
 * - 1 (`NAME`): Sort by name/title.
 *   Each entity can be sorted by name/title.
 */
class ServicesSortSid
{
    /** Sort by services order. */
    public const CUSTOM = 4;

    /** Sort by duration. */
    public const DURATION = 2;

    /** Sort by price. */
    public const PRICE = 3;

    /** Sort by name/title. */
    public const NAME = 1;
}
