<?php

namespace WlSdk;

/**
 * Statuses for lead management.
 *
 * Last used ID: 4.
 *
 * Values:
 * - 1 (`ACTIVE`): Active clients.
 * - 3 (`LEAVE`): Clients without interest.
 * - 2 (`NEWCOMER`): New clients.
 */
class RsLeadStatusSid
{
    /** Active clients. */
    public const ACTIVE = 1;

    /** Clients without interest. */
    public const LEAVE = 3;

    /** New clients. */
    public const NEWCOMER = 2;
}
