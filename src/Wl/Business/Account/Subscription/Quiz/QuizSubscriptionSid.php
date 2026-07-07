<?php

namespace WlSdk\Wl\Business\Account\Subscription\Quiz;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} subscription.
 *
 * Values:
 * - 3 (`BUSINESS`): Business
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 * - 4 (`STARTER`): Starter
 */
class QuizSubscriptionSid
{
    /** Business */
    public const BUSINESS = 3;

    /** None */
    public const FREE = 1;

    /** Professional */
    public const PROFESSIONAL = 2;

    /** Starter */
    public const STARTER = 4;
}
