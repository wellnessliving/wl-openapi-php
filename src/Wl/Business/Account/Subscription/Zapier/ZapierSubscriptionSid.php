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
enum ZapierSubscriptionSid: int
{
    case FREE = 1;
    case PROFESSIONAL = 2;
}
