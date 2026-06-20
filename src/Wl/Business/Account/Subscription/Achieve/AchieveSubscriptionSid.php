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
enum AchieveSubscriptionSid: int
{
    case FREE = 1;
    case PREMIUM = 2;
    case WHITE = 3;
    case WHITE0125 = 7;
    case WHITE_MAX = 4;
    case WHITE_PLUS = 6;
    case WHITE_PRO = 5;
}
