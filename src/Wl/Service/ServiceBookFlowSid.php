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
enum ServiceBookFlowSid: int
{
    case DATE_STAFF_ORDER = 2;
    case PREFER_ORDER = 3;
    case STAFF_DATE_ORDER = 1;
}
