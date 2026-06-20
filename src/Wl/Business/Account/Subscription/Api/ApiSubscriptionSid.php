<?php
namespace WlSdk\Wl\Business\Account\Subscription\Api;

/**
 * List of possible plans for
 * [ApiSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PREMIUM`): Premium
 */
enum ApiSubscriptionSid: int
{
    case FREE = 1;
    case PREMIUM = 2;
}
