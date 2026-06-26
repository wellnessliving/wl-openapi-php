<?php

namespace WlSdk;

/**
 * Manages mail pages.
 *
 * Last used ID: 5.
 *
 * Values:
 * - 4 (`ADMIN_BUSINESS`): Page with business mails.
 * - 3 (`AUTOMATED_MARKETING`): Page with automated mails.
 * - 5 (`BUSINESS_SMS_CHAT`): Page with notifications from business message chat.
 * - 1 (`CLIENT_NOTIFICATION`): Page with client notification mails.
 * - 2 (`STAFF_NOTIFICATION`): Page with staff notification mails.
 */
class RsMailPageSid
{
    /** Page with business mails. */
    public const ADMIN_BUSINESS = 4;

    /** Page with automated mails. */
    public const AUTOMATED_MARKETING = 3;

    /** Page with notifications from business message chat. */
    public const BUSINESS_SMS_CHAT = 5;

    /** Page with client notification mails. */
    public const CLIENT_NOTIFICATION = 1;

    /** Page with staff notification mails. */
    public const STAFF_NOTIFICATION = 2;
}
