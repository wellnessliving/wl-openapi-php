<?php
namespace WlSdk\Wl\Business\Account\Subscription\Quiz;

/**
 * List of possible plans for
 * [QuizSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
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
    const BUSINESS = 3;
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 2;
    /** Starter */
    const STARTER = 4;
}
