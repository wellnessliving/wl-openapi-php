<?php
namespace WlSdk\Wl\Login\Attendance;

/**
 * List of options to add client to attendance list.
 * 
 * Values:
 * - 2 (`DEBIT`): Add client to attendance list and charge his account.
 * - 3 (`PAY`): Add client to attendance list and pay now.
 * - 1 (`UNPAID`): Add client to attendance list without payment.
 */
enum AddOptionSid: int
{
    case DEBIT = 2;
    case PAY = 3;
    case UNPAID = 1;
}
