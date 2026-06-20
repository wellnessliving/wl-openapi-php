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
enum DirectConnectTicketStatusSid: int
{
    case CANCELLED = 1;
    case COMPLETE = 2;
    case ERROR = 3;
    case INPROCESS = 4;
    case OPEN = 6;
    case REVERSED = 7;
}
