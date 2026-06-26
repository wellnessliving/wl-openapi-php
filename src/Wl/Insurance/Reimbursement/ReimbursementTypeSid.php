<?php

namespace WlSdk\Wl\Insurance\Reimbursement;

/**
 * Types of the reimbursements.
 *
 * We do not exactly know, what does this mean.
 * We get type from API and give ability to filter history with a type.
 *
 * Last used ID: 2.
 *
 * Values:
 * - 1 (`CLUB`): Club Reimbursements.
 * - 2 (`MEMBER`): Member Reimbursements.
 */
class ReimbursementTypeSid
{
    /** Club Reimbursements. */
    public const CLUB = 1;

    /** Member Reimbursements. */
    public const MEMBER = 2;
}
