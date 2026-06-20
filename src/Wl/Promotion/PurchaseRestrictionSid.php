<?php

namespace WlSdk\Wl\Promotion;

/**
 * Purchase restrictions.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`ALL`): Purchase option available for all clients.
 * - 2 (`INTRODUCTORY`): Purchase option introductory offer, available for new clients only.
 * - 3 (`TYPE`): Purchase option available for clients with special login type or member group.
 */
class PurchaseRestrictionSid
{
    /** Purchase option available for all clients. */
    public const ALL = 1;

    /** Purchase option introductory offer, available for new clients only. */
    public const INTRODUCTORY = 2;

    /** Purchase option available for clients with special login type or member group. */
    public const TYPE = 3;
}
