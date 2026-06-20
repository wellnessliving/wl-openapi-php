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
    public const BASIC = 2;

    /** Enterprise */
    public const ENTERPRISE = 3;

    /** None */
    public const FREE = 1;

    /** Premium */
    public const PREMIUM = 4;
}
