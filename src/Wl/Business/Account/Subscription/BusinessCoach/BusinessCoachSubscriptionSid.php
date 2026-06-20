<?php
namespace WlSdk\Wl\Business\Account\Subscription\BusinessCoach;

/**
 * List of possible plans for
 * [BusinessCoachSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract)
 * subscription.
 * 
 * Values:
 * - 2 (`BUSINESS_SUCCESS_COACHING`): Business Success Coaching.
 * - 1 (`FREE`): No subscription.
 */
enum BusinessCoachSubscriptionSid: int
{
    case BUSINESS_SUCCESS_COACHING = 2;
    case FREE = 1;
}
