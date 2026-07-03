<?php

namespace WlSdk\Wl\Business\Account\Subscription\Zoom;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} subscription.
 *
 * Values:
 * - 2 (`BASIC`): Basic
 * - 1 (`FREE`): None
 * - 3 (`PROFESSIONAL`): Professional
 */
class ZoomSubscriptionSid
{
    /** Basic */
    public const BASIC = 2;

    /** None */
    public const FREE = 1;

    /** Professional */
    public const PROFESSIONAL = 3;
}
