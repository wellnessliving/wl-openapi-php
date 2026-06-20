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
enum PostcardSubscriptionSid: int
{
    case BASIC = 3;
    case FREE = 1;
    case PROFESSIONAL = 2;
}
