<?php

namespace WlSdk\Wl\Business\Account\Subscription\Website;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} subscription.
 *
 * Last used ID: 8.
 *
 * Values:
 * - 2 (`BASIC`): Basic
 * - 6 (`BASIC_LARGE`): Basic
 * - 9 (`BUNDLE_ADDON`): Presence (Bundle add-on)
 * - 10 (`BUNDLE_ADDON_TRIAL`): Presence (Bundle add-on) Trial
 * - 8 (`BUNDLE_FULL`): Presence (Bundle)
 * - 11 (`BUNDLE_FULL_TRIAL`): Presence (Bundle) Trial
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

    /** Presence (Bundle add-on) */
    public const BUNDLE_ADDON = 9;

    /** Presence (Bundle add-on) Trial */
    public const BUNDLE_ADDON_TRIAL = 10;

    /** Presence (Bundle) */
    public const BUNDLE_FULL = 8;

    /** Presence (Bundle) Trial */
    public const BUNDLE_FULL_TRIAL = 11;

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
