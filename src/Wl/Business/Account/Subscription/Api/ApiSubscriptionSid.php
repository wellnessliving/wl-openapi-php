<?php

namespace WlSdk\Wl\Business\Account\Subscription\Api;

/**
 * List of possible plans for
 * [ApiSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 *
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PREMIUM`): Premium
 */
class ApiSubscriptionSid
{
    /** None */
    public const FREE = 1;

    /** Premium */
    public const PREMIUM = 2;
}
