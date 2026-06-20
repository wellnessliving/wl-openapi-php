<?php
namespace WlSdk\Thoth\PayProcessor\Nuvei\Code;

/**
 * CS Response code class.
 * See Nuvei/doc/OMNI_Channel_ISO20022_V2.38.pdf 7.3.11.
 * 
 * Last used ID: 20
 * 
 * Values:
 * - 1 (`APPROVED`): Service has been successfully provided.
 * - 2 (`CANNOT_CANCEL`): Transaction cannot be cancelled.
 * - 3 (`DECLINED`): Service is declined.
 * - 4 (`DEVICE_BUSY`): Device is busy.
 * - 5 (`DUPLICATE_TRANSMISSION`): Duplicate transmission.
 * - 6 (`INITIATING_PARTY`): Invalid identification data for the sender.
 * - 7 (`INVALID_MESSAGE`): Invalid envelope of the message.
 * - 8 (`MESSAGE_TYPE`): Type of message the recipient receives is unknown or unsupported.
 * - 9 (`NO_TICKET`): NO Ticket/Emtpy.
 * - 10 (`PARSING_ERROR`): Invalid message: At least one of the data element or data structure is not present,
 *   the format, or the content of one data element or one data structure is not correct.
 * - 11 (`PROTOCOL_VERSION`): Version of the protocol couldn't be supported by the recipient.
 * - 12 (`RECIPIENT_PARTY`): Invalid identification data for the receiver.
 * - 13 (`TICKET_LOCKED`): Ticket is locked.
 * - 14 (`TIMEOUT_ERROR`): Timeout error.
 * - 16 (`TRANSACTION_CANCELLED`): Transaction has been cancelled.
 * - 15 (`TRANSACTION_IN_PROCESS`): There is an unfinish transactions.
 * - 17 (`TRANSACTION_NOT_FOUND`): Transaction has been cancelled.
 * - 20 (`UN_ADJUSTED_TIP`): Transaction with unadjusted tip.
 * - 18 (`UNABLE_TO_PROCESS`): Not possible to process the message, for instance the security module is unavailable,
 *   the hardware is unavailable, or there is a problem of resource.
 * - 19 (`UNMAPPED`): No relationship between register and terminal.
 */
enum CSResponseSid: int
{
    case APPROVED = 1;
    case CANNOT_CANCEL = 2;
    case DECLINED = 3;
    case DEVICE_BUSY = 4;
    case DUPLICATE_TRANSMISSION = 5;
    case INITIATING_PARTY = 6;
    case INVALID_MESSAGE = 7;
    case MESSAGE_TYPE = 8;
    case NO_TICKET = 9;
    case PARSING_ERROR = 10;
    case PROTOCOL_VERSION = 11;
    case RECIPIENT_PARTY = 12;
    case TICKET_LOCKED = 13;
    case TIMEOUT_ERROR = 14;
    case TRANSACTION_CANCELLED = 16;
    case TRANSACTION_IN_PROCESS = 15;
    case TRANSACTION_NOT_FOUND = 17;
    case UN_ADJUSTED_TIP = 20;
    case UNABLE_TO_PROCESS = 18;
    case UNMAPPED = 19;
}
