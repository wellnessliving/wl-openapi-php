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
enum MarketingSuiteSubscriptionSid: int
{
    case BASIC = 2;
    case BASIC_BUSINESS = 4;
    case BASIC_OLD = 3;
    case FREE = 1;
    case PRO = 5;
}
