<?php

namespace WlSdk\Wl\Login\Promotion\Convert;

/**
 * Different types of conversion behavior: when and how it should be converted.
 *
 * Values:
 * - 1 (`EXPIRATION_PAID`): Purchase Option converts one day after the scheduled expiration date and the client is
 * charged for the new purchase option.
 * - 2 (`NOW_FREE`): Purchase Option converts now and the client is not charged for the new Purchase Option.
 * - 3 (`NOW_PAID`): Purchase Option converts now and the client is changed for the new Purchase Option.
 * - 4 (`SCHEDULE_PAID`): Purchase Option converts on the specified date and the client is charged for the new Purchase
 * Option.
 */
class ConvertWhenSid
{
    /** Purchase Option converts one day after the scheduled expiration date and the client is charged for the new purchase option. */
    public const EXPIRATION_PAID = 1;

    /** Purchase Option converts now and the client is not charged for the new Purchase Option. */
    public const NOW_FREE = 2;

    /** Purchase Option converts now and the client is changed for the new Purchase Option. */
    public const NOW_PAID = 3;

    /** Purchase Option converts on the specified date and the client is charged for the new Purchase Option. */
    public const SCHEDULE_PAID = 4;
}
