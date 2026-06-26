<?php

namespace WlSdk;

/**
 * Class to manage statuses of history sent emails.
 *
 * Last ID: 6.
 *
 * Values:
 * - 3 (`BOUNCED`): Set this email history status when it was blacklisted by Amazon or went to spam.
 *   All possible bounce reasons are listed in [AmazonSesBounceSid](#/components/schemas/AmazonSesBounceSid).
 * - 5 (`FAIL`): Set this email history status when message was failed to send.
 *   Possible fail reason are listed in [FailSid](#/components/schemas/Core.Notification.FailSid).
 * - 6 (`FUTURE`): Set this email history status when message was scheduled on the future.
 * - 2 (`OPEN`): Set this email history status when user opened the letter in his mailbox.
 * - 4 (`SCHEDULE`): Set this email history status when message created and not sent.
 * - 1 (`SEND`): Set this email history status when message sent to user mailbox.
 */
class RsMailHistorySid
{
    /** Set this email history status when it was blacklisted by Amazon or went to spam. */
    public const BOUNCED = 3;

    /** Set this email history status when message was failed to send. */
    public const FAIL = 5;

    /** Set this email history status when message was scheduled on the future. */
    public const FUTURE = 6;

    /** Set this email history status when user opened the letter in his mailbox. */
    public const OPEN = 2;

    /** Set this email history status when message created and not sent. */
    public const SCHEDULE = 4;

    /** Set this email history status when message sent to user mailbox. */
    public const SEND = 1;
}
