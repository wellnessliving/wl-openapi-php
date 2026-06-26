<?php

namespace WlSdk\Wl\Franchise\Transfer;

/**
 * Transfer status.
 *
 * Last used ID: 4
 *
 * Values:
 * - 1 (`APPROVE`): Approved status.
 * - 4 (`CANCEL`): Cancel transfer.
 * - 3 (`DENY`): Deny transfer.
 * - 2 (`WAIT_APPROVE`): Wait for approve.
 */
class TransferStatusSid
{
    /** Approved status. */
    public const APPROVE = 1;

    /** Cancel transfer. */
    public const CANCEL = 4;

    /** Deny transfer. */
    public const DENY = 3;

    /** Wait for approve. */
    public const WAIT_APPROVE = 2;
}
