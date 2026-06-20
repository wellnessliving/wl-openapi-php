<?php
namespace WlSdk\Wl\Business\Account\Subscription\Reward;

/**
 * List of possible plans for
 * [RewardSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
class RewardSubscriptionSid
{
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 2;
}
