<?php
namespace WlSdk\Wl\Business\Account\Subscription\Fitbuilder;

/**
 * List of possible plans for
 * [FitbuilderSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
enum FitbuilderSubscriptionSid: int
{
    case FREE = 1;
    case PROFESSIONAL = 2;
}
