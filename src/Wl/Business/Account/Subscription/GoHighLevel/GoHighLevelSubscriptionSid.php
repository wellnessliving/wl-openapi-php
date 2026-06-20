<?php
namespace WlSdk\Wl\Business\Account\Subscription\GoHighLevel;

/**
 * List of possible plans for
 * [GoHighLevelSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 2 (`BASIC`): Standard
 * - 1 (`FREE`): Free
 */
enum GoHighLevelSubscriptionSid: int
{
    case BASIC = 2;
    case FREE = 1;
}
