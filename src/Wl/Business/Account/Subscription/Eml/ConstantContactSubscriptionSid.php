<?php

namespace WlSdk\Wl\Business\Account\Subscription\Eml;

/**
 * List of possible plans for
 * [ConstantContactSubscription](#/components/schemas/Wl.Business.Account.Subscription.Eml.EmlSubscriptionAbstract)
 * subscription.
 *
 * Values:
 * - 1 (`FREE`): None
 * - 2 (`STANDARD`): Standard
 */
class ConstantContactSubscriptionSid
{
    /** None */
    public const FREE = 1;

    /** Standard */
    public const STANDARD = 2;
}
