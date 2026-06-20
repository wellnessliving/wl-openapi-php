<?php
namespace WlSdk\Wl\Business\Account\Subscription\Zapier;

/**
 * List of possible plans for
 * [ZapierSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
class ZapierSubscriptionSid
{
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 2;
}
