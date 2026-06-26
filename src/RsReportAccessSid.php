<?php

namespace WlSdk;

/**
 * Level of access to the report.
 *
 * Last used ID: 5
 *
 * Values:
 * - 2 (`BUSINESS`): Access for staff of business.
 * - 3 (`CLIENT`): Access for client.
 * - 5 (`CUSTOM`): Custom access.
 * - 4 (`GUEST`): Access for guest.
 * - 1 (`ROOT`): Access only for administrator.
 */
class RsReportAccessSid
{
    /** Access for staff of business. */
    public const BUSINESS = 2;

    /** Access for client. */
    public const CLIENT = 3;

    /** Custom access. */
    public const CUSTOM = 5;

    /** Access for guest. */
    public const GUEST = 4;

    /** Access only for administrator. */
    public const ROOT = 1;
}
