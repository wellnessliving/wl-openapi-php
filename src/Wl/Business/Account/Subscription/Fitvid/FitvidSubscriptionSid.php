<?php
namespace WlSdk\Wl\Business\Account\Subscription\Fitvid;

/**
 * List of possible plans for
 * [FitvidSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 2 (`BASIC`): Basic
 * - 3 (`ENTERPRISE`): Enterprise
 * - 1 (`FREE`): None
 * - 4 (`PREMIUM`): Premium
 */
enum FitvidSubscriptionSid: int
{
    case BASIC = 2;
    case ENTERPRISE = 3;
    case FREE = 1;
    case PREMIUM = 4;
}
