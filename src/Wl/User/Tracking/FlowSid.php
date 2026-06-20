<?php
namespace WlSdk\Wl\User\Tracking;

/**
 * Different user flows that can be tracked.
 * 
 * Values:
 * - 1 (`BOOK_APPOINTMENT`): Appointment booking flow.
 * - 2 (`BOOK_CLASS`): Class booking flow.
 * - 3 (`BOOK_EVENT`): Event booking flow.
 */
enum FlowSid: int
{
    case BOOK_APPOINTMENT = 1;
    case BOOK_CLASS = 2;
    case BOOK_EVENT = 3;
}
