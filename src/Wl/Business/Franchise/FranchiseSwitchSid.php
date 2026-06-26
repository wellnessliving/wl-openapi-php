<?php

namespace WlSdk\Wl\Business\Franchise;

/**
 * List of franchisee log in levels to which a user can view/access.
 *
 * Last used ID: 4.
 *
 * Values:
 * - 1 (`COUNTRY`): Limits to countries.
 * - 2 (`LOCATION`): Limits to locations.
 * - 3 (`PROVINCE`): Limits to provinces/states.
 * - 4 (`REGION`): Limits to regions.
 */
class FranchiseSwitchSid
{
    /** Limits to countries. */
    public const COUNTRY = 1;

    /** Limits to locations. */
    public const LOCATION = 2;

    /** Limits to provinces/states. */
    public const PROVINCE = 3;

    /** Limits to regions. */
    public const REGION = 4;
}
