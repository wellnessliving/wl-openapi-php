<?php
namespace WlSdk\Wl\Business\Account\Subscription\Postcard;

/**
 * List of possible plans for
 * [PostcardSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 3 (`BASIC`): Basic
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
class PostcardSubscriptionSid
{
    /** Basic */
    const BASIC = 3;
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 2;
}
