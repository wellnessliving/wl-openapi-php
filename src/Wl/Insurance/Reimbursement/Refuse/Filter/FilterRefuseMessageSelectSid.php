<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Refuse\Filter;

/**
 * A list status of refuse message.
 *
 * Values:
 * - 3 (`ALL`): All records.
 * - 1 (`WITHOUT_MESSAGE`): Show only records which have not refuse message.
 * - 2 (`WITH_MESSAGE`): Show only records which have refuse message.
 */
class FilterRefuseMessageSelectSid
{
    /** All records. */
    public const ALL = 3;

    /** Show only records which have not refuse message. */
    public const WITHOUT_MESSAGE = 1;

    /** Show only records which have refuse message. */
    public const WITH_MESSAGE = 2;
}
