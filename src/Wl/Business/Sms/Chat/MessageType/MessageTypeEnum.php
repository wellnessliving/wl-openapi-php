<?php

namespace WlSdk\Wl\Business\Sms\Chat\MessageType;

/**
 * Define message type of SMS.
 *
 * Last ID: 4.
 *
 * Values:
 * - 4 (`FAILED_MESSAGES`): Failed message, can be of type client notifications, campaigns, or manual SMS.
 * - 1 (`MANUAL`): SMS messages that were sent either by the client.
 * - 2 (`MARKETING`): SMS generated from the Automated Marketing module.
 * - 3 (`NOTIFICATIONS`): SMS generated from the Setup > Client Notifications module.
 */
class MessageTypeEnum
{
    /** Failed message, can be of type client notifications, campaigns, or manual SMS. */
    public const FAILED_MESSAGES = 4;

    /** SMS messages that were sent either by the client. */
    public const MANUAL = 1;

    /** SMS generated from the Automated Marketing module. */
    public const MARKETING = 2;

    /** SMS generated from the Setup > Client Notifications module. */
    public const NOTIFICATIONS = 3;
}
