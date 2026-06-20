<?php

namespace WlSdk\Wl\Business\Account\Subscription\Door;

/**
 * List of possible plans for
 * [DoorSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 *
 * Values:
 * - 2 (`BASE`): Brivo
 * - 1 (`FREE`): None
 * - 3 (`PASSPORT`): Passport
 */
class DoorSubscriptionSid
{
    /** Brivo */
    public const BASE = 2;

    /** None */
    public const FREE = 1;

    /** Passport */
    public const PASSPORT = 3;
}
