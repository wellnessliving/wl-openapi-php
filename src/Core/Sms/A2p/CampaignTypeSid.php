<?php

namespace WlSdk\Core\Sms\A2p;

/**
 * A2P10DLC campaign types.
 * Prices here are added to the monthly price of the `\Wl\Business\Account\Subscription\Sms\SmsSubscription`.
 *
 * Last used id: 3.
 *
 * Values:
 * - 1 (`LOW_VOLUME`): Low volume campaign.
 * - 2 (`STANDARD`): Standard campaign.
 * - 3 (`STARTER`): Starter campaign.
 * - 4 (`ZERO_VOLUME`): Zero volume campaign.
 */
class CampaignTypeSid
{
    /** Low volume campaign. */
    public const LOW_VOLUME = 1;

    /** Standard campaign. */
    public const STANDARD = 2;

    /** Starter campaign. */
    public const STARTER = 3;

    /** Zero volume campaign. */
    public const ZERO_VOLUME = 4;
}
