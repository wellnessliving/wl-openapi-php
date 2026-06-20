<?php
namespace WlSdk\Wl\Business\Account\Subscription\Website;

/**
 * List of possible plans for
 * [WebsiteSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 * 
 * Values:
 * - 2 (`BASIC`): Basic
 * - 6 (`BASIC_LARGE`): Basic
 * - 4 (`ENTERPRISE`): Enterprise
 * - 1 (`FREE`): None
 * - 3 (`PREMIUM`): Premium
 * - 7 (`PREMIUM_MAX`): Premium (Business Max)
 * - 5 (`PROFESSIONAL`): Professional
 */
enum WebsiteSubscriptionSid: int
{
    case BASIC = 2;
    case BASIC_LARGE = 6;
    case ENTERPRISE = 4;
    case FREE = 1;
    case PREMIUM = 3;
    case PREMIUM_MAX = 7;
    case PROFESSIONAL = 5;
}
