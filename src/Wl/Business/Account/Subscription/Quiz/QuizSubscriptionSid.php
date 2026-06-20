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
enum QuizSubscriptionSid: int
{
    case BUSINESS = 3;
    case FREE = 1;
    case PROFESSIONAL = 2;
    case STARTER = 4;
}
