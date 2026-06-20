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
    public const FREE = 1;

    /** Professional */
    public const PROFESSIONAL = 2;
}
