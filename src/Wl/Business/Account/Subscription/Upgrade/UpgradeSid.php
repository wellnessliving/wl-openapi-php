<?php

namespace WlSdk\Wl\Business\Account\Subscription\Upgrade;

/**
 * List of upgrade actions.
 *
 * Values:
 * - 5 (`DISCOUNT_EXTEND`): Extend discount period for already active subscription if it is supported by the
 * subscription.
 * - 3 (`DOWNGRADE`): Downgrade already active subscription to a lower plan.
 * - 1 (`SUBSCRIBE`): Activate a subscription.
 * - 2 (`UPGRADE`): Upgrade already active subscription to a higher plan.
 */
class UpgradeSid
{
    /** Extend discount period for already active subscription if it is supported by the subscription. */
    public const DISCOUNT_EXTEND = 5;

    /** Downgrade already active subscription to a lower plan. */
    public const DOWNGRADE = 3;

    /** Activate a subscription. */
    public const SUBSCRIBE = 1;

    /** Upgrade already active subscription to a higher plan. */
    public const UPGRADE = 2;
}
