<?php

namespace WlSdk\Wl\Business\Account\Subscription\AiAgent;

/**
 * List of possible plans for
 * [AiAgentSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract) subscription.
 *
 * Last used ID: 5.
 *
 * Values:
 * - 4 (`CHAT_AGENT`): Chat Agent
 * - 5 (`DENTAL_PHONE_AGENT`): Dental Phone Agent
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 * - 3 (`STANDARD`): Assistant
 */
class AiAgentSubscriptionSid
{
    /** Chat Agent */
    public const CHAT_AGENT = 4;

    /** Dental Phone Agent */
    public const DENTAL_PHONE_AGENT = 5;

    /** None */
    public const FREE = 1;

    /** Professional */
    public const PROFESSIONAL = 2;

    /** Assistant */
    public const STANDARD = 3;
}
