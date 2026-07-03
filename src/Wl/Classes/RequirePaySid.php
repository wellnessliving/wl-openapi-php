<?php

namespace WlSdk\Wl\Classes;

/**
 * List of possible modes to require amount while booking a class.
 *
 * Values:
 * - 3 (`ADVANCE`): Clients can pay online or pay when they visit.
 *   If set "pay when visit" then it has additional options. See {@link \WlSdk\Wl\Classes\RequirePayVisitOptionSid}.
 * - 4 (`DEPOSIT`): Client should leave a deposit before booking an event.
 * - 1 (`ONLINE`): Client must purchase online.
 * - 2 (`VISIT`): Clients can only pay when they visit. Online payment is not available.
 *   It has additional options {@link \WlSdk\Wl\Classes\RequirePayVisitOptionSid}.
 */
class RequirePaySid
{
    /** Clients can pay online or pay when they visit. */
    public const ADVANCE = 3;

    /** Client should leave a deposit before booking an event. */
    public const DEPOSIT = 4;

    /** Client must purchase online. */
    public const ONLINE = 1;

    /** Clients can only pay when they visit. Online payment is not available. */
    public const VISIT = 2;
}
