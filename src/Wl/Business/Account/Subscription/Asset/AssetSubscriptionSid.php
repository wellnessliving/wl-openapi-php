<?php
namespace WlSdk\Wl\Business\Account\Subscription\Asset;

/**
 * List of possible plans for
 * [AssetSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
class AssetSubscriptionSid
{
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 2;
}
