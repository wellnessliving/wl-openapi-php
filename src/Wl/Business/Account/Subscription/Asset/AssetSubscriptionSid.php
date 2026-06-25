<?php

namespace WlSdk\Wl\Business\Account\Subscription\Asset;

/**
 * List of possible plans for
 * [AssetSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 *
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
class AssetSubscriptionSid
{
    /** None */
    public const FREE = 1;

    /** Professional */
    public const PROFESSIONAL = 2;
}
