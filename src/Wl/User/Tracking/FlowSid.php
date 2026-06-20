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
class FlowSid
{
    /** Appointment booking flow. */
    public const BOOK_APPOINTMENT = 1;

    /** Class booking flow. */
    public const BOOK_CLASS = 2;

    /** Event booking flow. */
    public const BOOK_EVENT = 3;
}
