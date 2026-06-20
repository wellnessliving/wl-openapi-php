<?php
namespace WlSdk\Wl\Business\Account\Subscription\Finance;

/**
 * List of possible plans for
 * [FinanceSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
enum FinanceSubscriptionSid: int
{
    case FREE = 1;
    case PROFESSIONAL = 2;
}
