<?php

namespace WlSdk\Wl\Business\Account\Subscription\MarketingSuite;

/**
 * List of possible plans for
 * [MarketingSuiteSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract)
 * subscription.
 *
 * Values:
 * - 2 (`BASIC`): Pro
 * - 4 (`BASIC_BUSINESS`): Standard (Business)
 * - 3 (`BASIC_OLD`): Standard (Legacy)
 * - 1 (`FREE`): Base
 * - 5 (`PRO`): Ultimate
 */
class MarketingSuiteSubscriptionSid
{
    /** Pro */
    public const BASIC = 2;

    /** Standard (Business) */
    public const BASIC_BUSINESS = 4;

    /** Standard (Legacy) */
    public const BASIC_OLD = 3;

    /** Base */
    public const FREE = 1;

    /** Ultimate */
    public const PRO = 5;
}
