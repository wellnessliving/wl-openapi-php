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
    const CHAT_AGENT = 4;
    /** Dental Phone Agent */
    const DENTAL_PHONE_AGENT = 5;
    /** None */
    const FREE = 1;
    /** Professional */
    const PROFESSIONAL = 2;
    /** Assistant */
    const STANDARD = 3;
}
