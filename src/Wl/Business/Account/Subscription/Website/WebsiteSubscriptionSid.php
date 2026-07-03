<?php

namespace WlSdk\Wl\Business\Account\Subscription\Website;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} subscription.
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
    public const BASIC = 2;

    /** Basic */
    public const BASIC_LARGE = 6;

    /** Enterprise */
    public const ENTERPRISE = 4;

    /** None */
    public const FREE = 1;

    /** Premium */
    public const PREMIUM = 3;

    /** Premium (Business Max) */
    public const PREMIUM_MAX = 7;

    /** Professional */
    public const PROFESSIONAL = 5;
}
