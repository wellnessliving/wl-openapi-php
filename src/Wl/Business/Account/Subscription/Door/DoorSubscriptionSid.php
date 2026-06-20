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
enum DoorSubscriptionSid: int
{
    case BASE = 2;
    case FREE = 1;
    case PASSPORT = 3;
}
