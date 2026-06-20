<?php
namespace WlSdk\Wl\Business\Account\Subscription\Fitzone;

/**
 * List of possible plans for
 * [FitzoneSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
enum FitzoneSubscriptionSid: int
{
    case FREE = 1;
    case PROFESSIONAL = 2;
}
