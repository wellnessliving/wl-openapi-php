<?php

namespace WlSdk\Wl\Mail\Campaign;

/**
 * Possible statuses of the mail campaigns.
 *
 * Last ID: 4
 *
 * Values:
 * - 4 (`BOUNCED`): Email campaign is sent but has no successfully delivered emails.
 * - 3 (`FAIL`): Email campaign is sent but all emails are not delivered due to mail server errors.
 * - 2 (`FUTURE`): Email campaign will be sent in the future.
 *
 *   Date when it's sent can be found in the table RsMailPatternLiveSql.
 * - 1 (`PAST`): Email campaign is sent.
 */
class MailCampaignStatusSid
{
    /** Email campaign is sent but has no successfully delivered emails. */
    public const BOUNCED = 4;

    /** Email campaign is sent but all emails are not delivered due to mail server errors. */
    public const FAIL = 3;

    /** Email campaign will be sent in the future. */
    public const FUTURE = 2;

    /** Email campaign is sent. */
    public const PAST = 1;
}
