<?php
namespace WlSdk\Wl\Business\Account\Subscription\Review;

/**
 * List of possible plans for
 * [ReviewSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
class ReviewSubscriptionSid
{
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 2;
}
