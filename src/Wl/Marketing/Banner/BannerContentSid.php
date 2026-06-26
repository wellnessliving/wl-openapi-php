<?php

namespace WlSdk\Wl\Marketing\Banner;

/**
 * Identifier constants for Marketing Suite banner content variants.
 *
 * Each constant defines a page-specific version of the promotional banner
 * with different title, description, and feature highlights.
 *
 * Last used id: 4.
 *
 * Values:
 * - 1 (`CLIENT_GROUP`): Client groups settings page banner.
 *
 *   Focuses on lead tracking and automated follow-up features.
 * - 2 (`EMAIL_SETTINGS`): Email settings page banner.
 *
 *   Focuses on email marketing capabilities.
 * - 3 (`LEAD_MANAGEMENT`): Lead management page banner.
 *
 *   Focuses on lead conversion and tracking features.
 * - 4 (`QUICK_CONTACT`): Quick contact popup banner (email, push, SMS).
 *
 *   Focuses on smarter sending and campaign features.
 */
class BannerContentSid
{
    /** Client groups settings page banner. */
    public const CLIENT_GROUP = 1;

    /** Email settings page banner. */
    public const EMAIL_SETTINGS = 2;

    /** Lead management page banner. */
    public const LEAD_MANAGEMENT = 3;

    /** Quick contact popup banner (email, push, SMS). */
    public const QUICK_CONTACT = 4;
}
