<?php

namespace WlSdk\Wl\Profile\Page\Notifications;

/**
 * Types of client's notifications.
 *
 * Last used ID: 6.
 *
 * Values:
 * - 1 (`ACCOUNT_MANAGEMENT_EMAIL`): Email notifications related to purchases, contracts, and other activity in a
 * client's account.
 * - 2 (`ACCOUNT_MANAGEMENT_SMS`): Sms notification related to purchases, contracts, and other activity in a client's
 * account.
 * - 3 (`NEWS_AND_UPDATES_EMAIL`): Email notifications related to news and updates from the business regarding their
 * services, availability and promotions.
 * - 4 (`NEWS_AND_UPDATES_SMS`): SMS notifications related to news and updates from the business regarding their
 * services, availability and promotions.
 * - 5 (`SCHEDULE_AND_REMINDERS_EMAIL`): Email notifications related to the services a client has booked.
 * - 6 (`SCHEDULE_AND_REMINDERS_SMS`): SMS notifications related to the services a client has booked.
 */
class NotificationSid
{
    /** Email notifications related to purchases, contracts, and other activity in a client's account. */
    public const ACCOUNT_MANAGEMENT_EMAIL = 1;

    /** Sms notification related to purchases, contracts, and other activity in a client's account. */
    public const ACCOUNT_MANAGEMENT_SMS = 2;

    /** Email notifications related to news and updates from the business regarding their services, availability and promotions. */
    public const NEWS_AND_UPDATES_EMAIL = 3;

    /** SMS notifications related to news and updates from the business regarding their services, availability and promotions. */
    public const NEWS_AND_UPDATES_SMS = 4;

    /** Email notifications related to the services a client has booked. */
    public const SCHEDULE_AND_REMINDERS_EMAIL = 5;

    /** SMS notifications related to the services a client has booked. */
    public const SCHEDULE_AND_REMINDERS_SMS = 6;
}
