<?php

namespace WlSdk\Wl\Business\Account\Subscription\BusinessCoach;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} subscription.
 *
 * Values:
 * - 2 (`BUSINESS_SUCCESS_COACHING`): Business Success Coaching.
 * - 1 (`FREE`): No subscription.
 */
class BusinessCoachSubscriptionSid
{
    /** Business Success Coaching. */
    public const BUSINESS_SUCCESS_COACHING = 2;

    /** No subscription. */
    public const FREE = 1;
}
