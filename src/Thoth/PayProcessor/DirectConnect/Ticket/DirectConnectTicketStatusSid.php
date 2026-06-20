<?php
namespace WlSdk\Thoth\PayProcessor\DirectConnect\Ticket;

/**
 * Paragon ticket status.
 * 
 * Last used id: 7.
 * 
 * Values:
 * - 1 (`CANCELLED`): Ticket was canceled.
 * - 2 (`COMPLETE`): Ticket was completed.
 * - 3 (`ERROR`): Ticket in error state.
 * - 4 (`INPROCESS`): Ticket is processed.
 * - 6 (`OPEN`): Ticket is opened.
 * - 7 (`REVERSED`): Ticket was reversed.
 */
class DirectConnectTicketStatusSid
{
    /** Ticket was canceled. */
    const CANCELLED = 1;
    /** Ticket was completed. */
    const COMPLETE = 2;
    /** Ticket in error state. */
    const ERROR = 3;
    /** Ticket is processed. */
    const INPROCESS = 4;
    /** Ticket is opened. */
    const OPEN = 6;
    /** Ticket was reversed. */
    const REVERSED = 7;
}
