<?php
namespace WlSdk\Wl\Classes;

/**
 * List of possible modes to require amount while booking a class.
 * 
 * Values:
 * - 3 (`ADVANCE`): Clients can pay online or pay when they visit.
 *   If set "pay when visit" then it has additional options. See
 * [RequirePayVisitOptionSid](#/components/schemas/Wl.Classes.RequirePayVisitOptionSid).
 * - 4 (`DEPOSIT`): Client should leave a deposit before booking an event.
 * - 1 (`ONLINE`): Client must purchase online.
 * - 2 (`VISIT`): Clients can only pay when they visit. Online payment is not available.
 *   It has additional options [RequirePayVisitOptionSid](#/components/schemas/Wl.Classes.RequirePayVisitOptionSid).
 */
enum RequirePaySid: int
{
    case ADVANCE = 3;
    case DEPOSIT = 4;
    case ONLINE = 1;
    case VISIT = 2;
}
