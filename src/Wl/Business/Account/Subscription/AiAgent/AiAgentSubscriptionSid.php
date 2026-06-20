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
enum AiAgentSubscriptionSid: int
{
    case CHAT_AGENT = 4;
    case DENTAL_PHONE_AGENT = 5;
    case FREE = 1;
    case PROFESSIONAL = 2;
    case STANDARD = 3;
}
