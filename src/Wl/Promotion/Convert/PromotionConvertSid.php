<?php

namespace WlSdk\Wl\Promotion\Convert;

/**
 * List of options to convert promotion.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`DOWNGRADE`): Promotion conversion downgraded.
 * - 2 (`EQUAL_VALUE`): Type of the promotion conversion.
 * - 3 (`UPGRADE`): Promotion conversion upgraded.
 */
class PromotionConvertSid
{
    /** Promotion conversion downgraded. */
    public const DOWNGRADE = 1;

    /** Type of the promotion conversion. */
    public const EQUAL_VALUE = 2;

    /** Promotion conversion upgraded. */
    public const UPGRADE = 3;
}
