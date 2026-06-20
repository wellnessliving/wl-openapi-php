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
class WebsiteSubscriptionSid
{
    /** Basic */
    const BASIC = 2;
    /** Basic */
    const BASIC_LARGE = 6;
    /** Enterprise */
    const ENTERPRISE = 4;
    /** None */
    const FREE = 1;
    /** Premium */
    const PREMIUM = 3;
    /** Premium (Business Max) */
    const PREMIUM_MAX = 7;
    /** Professional */
    const PROFESSIONAL = 5;
}
