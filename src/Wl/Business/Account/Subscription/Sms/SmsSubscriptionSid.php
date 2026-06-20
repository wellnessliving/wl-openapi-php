<?php

namespace WlSdk\Wl\Business\Account\Subscription\Sms;

/**
 * List of possible plans for
 * [SmsSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 *
 * Values:
 * - 5 (`CENTER_1000`): 1000 Messages
 * - 8 (`CENTER_10000`): 10000 Messages
 * - 6 (`CENTER_2500`): 2500 Messages
 * - 9 (`CENTER_25000`): 25000 Messages
 * - 4 (`CENTER_500`): 500 Messages
 * - 7 (`CENTER_5000`): 5000 Messages
 * - 10 (`CENTER_CUSTOM`): Message Center Custom
 * - 11 (`ENTERPRISE`): Enterprise
 * - 1 (`FREE`): None
 * - 3 (`PREMIUM`): Message Center Professional
 */
class SmsSubscriptionSid
{
    /** 1000 Messages */
    public const CENTER_1000 = 5;

    /** 10000 Messages */
    public const CENTER_10000 = 8;

    /** 2500 Messages */
    public const CENTER_2500 = 6;

    /** 25000 Messages */
    public const CENTER_25000 = 9;

    /** 500 Messages */
    public const CENTER_500 = 4;

    /** 5000 Messages */
    public const CENTER_5000 = 7;

    /** Message Center Custom */
    public const CENTER_CUSTOM = 10;

    /** Enterprise */
    public const ENTERPRISE = 11;

    /** None */
    public const FREE = 1;

    /** Message Center Professional */
    public const PREMIUM = 3;
}
