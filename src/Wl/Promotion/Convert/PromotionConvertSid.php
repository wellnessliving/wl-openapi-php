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
enum PromotionConvertSid: int
{
    case DOWNGRADE = 1;
    case EQUAL_VALUE = 2;
    case UPGRADE = 3;
}
