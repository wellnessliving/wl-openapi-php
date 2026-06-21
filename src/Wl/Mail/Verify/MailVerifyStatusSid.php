<?php

namespace WlSdk\Wl\Mail\Verify;

/**
 * Statuses of mail verification. Based on statuses that returns Amazon SES API.
 * It is necessary for sending email through Amazon SES. Amazon SES can send email only from verified email addresses.
 *
 * Last used ID: 4.
 *
 * Values:
 * - 4 (`FAIL`): Email is not verified.
 * - 1 (`NONE`): Verification request is not running.
 * - 3 (`VERIFY`): Email is verified.
 * - 2 (`WAIT_FOR_VERIFY`): Verification in progress.
 */
class MailVerifyStatusSid
{
    /** Email is not verified. */
    public const FAIL = 4;

    /** Verification request is not running. */
    public const NONE = 1;

    /** Email is verified. */
    public const VERIFY = 3;

    /** Verification in progress. */
    public const WAIT_FOR_VERIFY = 2;
}
