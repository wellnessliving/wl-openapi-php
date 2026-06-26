<?php

namespace WlSdk\Wl\Postcard\Campaign;

/**
 * Ways to select client for mail campaign.
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`ENTIRE`): Send to all clients of a business.
 * - 2 (`GROUP`): Send to clients of certain groups.
 * - 3 (`TYPE`): Sent to clients of certain types.
 */
class CampaignClientSid
{
    /** Send to all clients of a business. */
    public const ENTIRE = 1;

    /** Send to clients of certain groups. */
    public const GROUP = 2;

    /** Sent to clients of certain types. */
    public const TYPE = 3;
}
