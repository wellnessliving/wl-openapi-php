<?php

namespace WlSdk\Wl\Contact;

/**
 * Contains list of ways to contact with clients.
 *
 * Values:
 * - 1 (`EMAIL`): Contact performed via email.
 * - 2 (`MAIL`): Contact performed view mail letter.
 * - 3 (`PERSON`): Contact directly to person.
 * - 4 (`PHONE`): Contact via phone call.
 * - 6 (`PUSH`): Contact via push notification.
 * - 5 (`SMS`): Contact via SMS.
 */
class ContactSid
{
    /** Contact performed via email. */
    public const EMAIL = 1;

    /** Contact performed view mail letter. */
    public const MAIL = 2;

    /** Contact directly to person. */
    public const PERSON = 3;

    /** Contact via phone call. */
    public const PHONE = 4;

    /** Contact via push notification. */
    public const PUSH = 6;

    /** Contact via SMS. */
    public const SMS = 5;
}
