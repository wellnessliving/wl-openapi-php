<?php

namespace WlSdk;

/**
 * The possible payment types an appointment can have.
 *
 * Values:
 * - 2 (`DEPOSIT`): A deposit was paid.
 * - 4 (`FREE`): Appointment is free and does not require payment.
 * - 3 (`FULL`): The full price was paid.
 * - 1 (`NONE`): Nothing was paid.
 */
class RsAppointmentPaySid
{
    /** A deposit was paid. */
    public const DEPOSIT = 2;

    /** Appointment is free and does not require payment. */
    public const FREE = 4;

    /** The full price was paid. */
    public const FULL = 3;

    /** Nothing was paid. */
    public const NONE = 1;
}
