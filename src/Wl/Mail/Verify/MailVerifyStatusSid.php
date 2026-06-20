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
enum MailVerifyStatusSid: int
{
    case FAIL = 4;
    case NONE = 1;
    case VERIFY = 3;
    case WAIT_FOR_VERIFY = 2;
}
