<?php

namespace WlSdk\Wl\Service;

/**
 * A list of client booking flow types.
 *
 * Values:
 * - 2 (`DATE_STAFF_ORDER`): Client selects the date and time and then the staff member.
 * - 3 (`PREFER_ORDER`): Client selects their preferred booking order should be staff member / calendar.
 * - 1 (`STAFF_DATE_ORDER`): Client selects the staff member and then the date and time.
 */
class ServiceBookFlowSid
{
    /** Client selects the date and time and then the staff member. */
    public const DATE_STAFF_ORDER = 2;

    /** Client selects their preferred booking order should be staff member / calendar. */
    public const PREFER_ORDER = 3;

    /** Client selects the staff member and then the date and time. */
    public const STAFF_DATE_ORDER = 1;
}
