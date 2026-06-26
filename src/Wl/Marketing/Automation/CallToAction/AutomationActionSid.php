<?php

namespace WlSdk\Wl\Marketing\Automation\CallToAction;

/**
 * List of call to action types for automations.
 *
 * Last used ID: 2.
 *
 * Values:
 * - 1 (`BOOKING_LINK`): Link to book a service, class, or an event.
 * - 2 (`PURCHASE_LINK`): Link to purchase a promotion or a discount code.
 */
class AutomationActionSid
{
    /** Link to book a service, class, or an event. */
    public const BOOKING_LINK = 1;

    /** Link to purchase a promotion or a discount code. */
    public const PURCHASE_LINK = 2;
}
