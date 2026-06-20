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
    const BASE = 2;
    /** None */
    const FREE = 1;
    /** Passport */
    const PASSPORT = 3;
}
