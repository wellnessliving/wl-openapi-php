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
enum ZoomSubscriptionSid: int
{
    case BASIC = 2;
    case FREE = 1;
    case PROFESSIONAL = 3;
}
