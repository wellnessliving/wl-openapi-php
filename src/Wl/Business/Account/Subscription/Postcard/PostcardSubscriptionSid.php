<?php

namespace WlSdk\Wl\Business\Account\Subscription\Postcard;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} subscription.
 *
 * Values:
 * - 3 (`BASIC`): Basic
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 */
class PostcardSubscriptionSid
{
    /** Basic */
    public const BASIC = 3;

    /** None */
    public const FREE = 1;

    /** Professional */
    public const PROFESSIONAL = 2;
}
