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
enum RsAppointmentPaySid: int
{
    case DEPOSIT = 2;
    case FREE = 4;
    case FULL = 3;
    case NONE = 1;
}
