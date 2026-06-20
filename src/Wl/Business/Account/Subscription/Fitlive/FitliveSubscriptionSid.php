<?php
namespace WlSdk\Wl\Business\Account\Subscription\Fitlive;

/**
 * List of possible plans for
 * [FitliveSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 5 (`ADVANCED`): Advanced
 * - 4 (`BASIC`): Basic
 * - 1 (`FREE`): None
 * - 2 (`LICENCED`): Professional
 * - 3 (`SUSPENDED`): Suspended
 */
class FitliveSubscriptionSid
{
    /** Advanced */
    const ADVANCED = 5;
    /** Basic */
    const BASIC = 4;
    /** None */
    const FREE = 1;
    /** Professional */
    const LICENCED = 2;
    /** Suspended */
    const SUSPENDED = 3;
}
