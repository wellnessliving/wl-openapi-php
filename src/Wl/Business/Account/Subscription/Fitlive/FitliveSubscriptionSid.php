<?php
namespace WlSdk\Wl\Business\Account\Subscription\Fitlive;

/**
 * List of possible plans for
 * [FitliveSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 5 (`ADVANCED`): Advanced
 * - 4 (`BASIC`): Basic
 * - 1 (`FREE`): None
 * - 2 (`LICENCED`): Professional
 * - 3 (`SUSPENDED`): Suspended
 */
enum FitliveSubscriptionSid: int
{
    case ADVANCED = 5;
    case BASIC = 4;
    case FREE = 1;
    case LICENCED = 2;
    case SUSPENDED = 3;
}
