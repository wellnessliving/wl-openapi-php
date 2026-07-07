<?php

namespace WlSdk\Wl\Business\Account\Subscription\Email;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\Eml\EmlSubscriptionAbstract} subscription.
 *
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`STANDARD`): Standard
 */
class EmailSubscriptionSid
{
    /** None */
    public const FREE = 1;

    /** Standard */
    public const STANDARD = 2;
}
