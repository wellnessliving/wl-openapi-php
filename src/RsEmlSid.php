<?php

namespace WlSdk;

/**
 * A list of Electronic Mailing Lists (EML) management services.
 *
 * Order matters, do not use alphabetical order in this class, because we need Mailchimp to be the first one.
 *
 * Values:
 * - 2 (`CC`): Constant contact.
 * - 1 (`MAILCHIMP`): MailChimp.
 */
class RsEmlSid
{
    /** Constant contact. */
    public const CC = 2;

    /** MailChimp. */
    public const MAILCHIMP = 1;
}
