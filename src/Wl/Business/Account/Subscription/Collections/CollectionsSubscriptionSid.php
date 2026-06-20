<?php
namespace WlSdk\Wl\Business\Account\Subscription\Collections;

/**
 * List of possible plans for
 * [CollectionsSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 3 (`INTEGRATION_REQUESTED`): Integration Requested
 * - 2 (`PROFESSIONAL`): Professional
 */
enum CollectionsSubscriptionSid: int
{
    case FREE = 1;
    case INTEGRATION_REQUESTED = 3;
    case PROFESSIONAL = 2;
}
