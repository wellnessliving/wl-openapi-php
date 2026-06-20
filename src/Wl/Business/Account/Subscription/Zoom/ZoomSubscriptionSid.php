<?php
namespace WlSdk\Wl\Business\Account\Subscription\Zoom;

/**
 * List of possible plans for
 * [ZoomSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 2 (`BASIC`): Basic
 * - 1 (`FREE`): None
 * - 3 (`PROFESSIONAL`): Professional
 */
class ZoomSubscriptionSid
{
    /** Basic */
    const BASIC = 2;
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 3;
}
