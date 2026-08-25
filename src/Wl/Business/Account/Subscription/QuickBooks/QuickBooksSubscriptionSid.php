<?php

namespace WlSdk\Wl\Business\Account\Subscription\QuickBooks;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} subscription.
 *
 * Values:
 * - 2 (`BASIC`): Standard
 * - 1 (`FREE`): Free
 */
class QuickBooksSubscriptionSid
{
    /** Standard */
    public const BASIC = 2;

    /** Free */
    public const FREE = 1;
}
