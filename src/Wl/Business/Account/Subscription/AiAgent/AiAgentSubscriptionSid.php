<?php

namespace WlSdk\Wl\Business\Account\Subscription\AiAgent;

/**
 * List of possible plans for {@link \WlSdk\Wl\Business\Account\Subscription\SubscriptionAbstract} subscription.
 *
 * Last used ID: 9.
 *
 * Values:
 * - 8 (`CHAT_AGENT_BUNDLE`): Chat Agent (Bundle)
 * - 9 (`CHAT_AGENT_BUNDLE_TRIAL`): Chat Agent (Bundle) Trial
 * - 5 (`DENTAL_PHONE_AGENT`): Dental Phone Agent
 * - 1 (`FREE`): None
 * - 2 (`PROFESSIONAL`): Professional
 * - 6 (`PROFESSIONAL_TRIAL`): Professional subscription, which will be automatically converted to {@link
 * \WlSdk\Wl\Business\Account\Subscription\AiAgent\AiAgentSubscriptionSid} after the 5th lead.
 * - 3 (`STANDARD`): Assistant
 * - 7 (`STANDARD_TRIAL`): Standard subscription, which will be automatically converted to {@link
 * \WlSdk\Wl\Business\Account\Subscription\AiAgent\AiAgentSubscriptionSid} after the 5th lead.
 */
class AiAgentSubscriptionSid
{
    /** Chat Agent (Bundle) */
    public const CHAT_AGENT_BUNDLE = 8;

    /** Chat Agent (Bundle) Trial */
    public const CHAT_AGENT_BUNDLE_TRIAL = 9;

    /** Dental Phone Agent */
    public const DENTAL_PHONE_AGENT = 5;

    /** None */
    public const FREE = 1;

    /** Professional */
    public const PROFESSIONAL = 2;

    /** Professional subscription, which will be automatically converted to {@link \WlSdk\Wl\Business\Account\Subscription\AiAgent\AiAgentSubscriptionSid} after the 5th lead. */
    public const PROFESSIONAL_TRIAL = 6;

    /** Assistant */
    public const STANDARD = 3;

    /** Standard subscription, which will be automatically converted to {@link \WlSdk\Wl\Business\Account\Subscription\AiAgent\AiAgentSubscriptionSid} after the 5th lead. */
    public const STANDARD_TRIAL = 7;
}
