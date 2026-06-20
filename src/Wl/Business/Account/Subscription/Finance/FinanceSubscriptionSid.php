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
class FinanceSubscriptionSid
{
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 2;
}
