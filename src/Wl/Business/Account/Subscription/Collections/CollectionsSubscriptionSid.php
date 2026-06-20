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
class CollectionsSubscriptionSid
{
    /** None */
    const FREE = 1;
    /** Integration Requested */
    const INTEGRATION_REQUESTED = 3;
    /** Professional */
    const PROFESSIONAL = 2;
}
