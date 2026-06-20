<?php
namespace WlSdk\Wl\Business\Account\Subscription\Fitvid;

/**
 * List of possible plans for
 * [FitvidSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 2 (`BASIC`): Basic
 * - 3 (`ENTERPRISE`): Enterprise
 * - 1 (`FREE`): None
 * - 4 (`PREMIUM`): Premium
 */
class FitvidSubscriptionSid
{
    /** Basic */
    const BASIC = 2;
    /** Enterprise */
    const ENTERPRISE = 3;
    /** None */
    const FREE = 1;
    /** Premium */
    const PREMIUM = 4;
}
