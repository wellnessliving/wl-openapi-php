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
enum OptionSid: int
{
    case APPOINTMENT_NAME = 1;
    case CLIENT_NAME = 3;
    case STAFF_NAME = 2;
}
