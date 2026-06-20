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
class AddOptionSid
{
    /** Add client to attendance list and charge his account. */
    const DEBIT = 2;
    /** Add client to attendance list and pay now. */
    const PAY = 3;
    /** Add client to attendance list without payment. */
    const UNPAID = 1;
}
