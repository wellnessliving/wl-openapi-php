<?php

namespace WlSdk\Wl\Business\Account\Subscription\Achieve;

/**
 * List of possible plans for
 * [AchieveSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 *
 * Values:
 * - 1 (`FREE`): Basic
 * - 2 (`PREMIUM`): Premium
 * - 3 (`WHITE`): White Label (Legacy)
 * - 7 (`WHITE0125`): White Label
 * - 4 (`WHITE_MAX`): White Label (Business Max)
 * - 6 (`WHITE_PLUS`): White Label (Legacy)
 * - 5 (`WHITE_PRO`): White Label (Business Pro)
 */
class AchieveSubscriptionSid
{
    /** Basic */
    public const FREE = 1;

    /** Premium */
    public const PREMIUM = 2;

    /** White Label (Legacy) */
    public const WHITE = 3;

    /** White Label */
    public const WHITE0125 = 7;

    /** White Label (Business Max) */
    public const WHITE_MAX = 4;

    /** White Label (Legacy) */
    public const WHITE_PLUS = 6;

    /** White Label (Business Pro) */
    public const WHITE_PRO = 5;
}
