<?php

namespace WlSdk\Wl\Schedule\Design;

/**
 * Appointment display option.
 *
 * Last used ID: 3
 *
 * Values:
 * - 1 (`APPOINTMENT_NAME`): Appointment name in header.
 * - 3 (`CLIENT_NAME`): Client name in header.
 * - 2 (`STAFF_NAME`): Staff name in header.
 */
class OptionSid
{
    /** Appointment name in header. */
    public const APPOINTMENT_NAME = 1;

    /** Client name in header. */
    public const CLIENT_NAME = 3;

    /** Staff name in header. */
    public const STAFF_NAME = 2;
}
