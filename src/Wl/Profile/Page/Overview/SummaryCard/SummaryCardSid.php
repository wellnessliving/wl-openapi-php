<?php

namespace WlSdk\Wl\Profile\Page\Overview\SummaryCard;

/**
 * List of summary cards on client's Overview page.
 *
 * Last used ID: 9.
 *
 * Values:
 * - 1 (`ACCOUNT_BALANCE`): Account balance summary card.
 * - 2 (`AVERAGE_MONTHLY_VALUE`): Account balance summary card.
 * - 10 (`LAST_MONTH_VISIT`): Last 30 days visits summary card.
 * - 3 (`LAST_VISIT`): Last visit summary card.
 * - 4 (`LATE_CANCEL`): Late cancel summary card.
 * - 5 (`LIFETIME_VALUE`): Lifetime value summary card.
 * - 6 (`LIFETIME_VISITS`): Lifetime visits summary card.
 * - 7 (`NEXT_VISIT`): Next visit summary card.
 * - 8 (`NO_SHOWS`): No-shows summary card.
 * - 9 (`REFERRALS`): Referrals summary card.
 */
class SummaryCardSid
{
    /** Account balance summary card. */
    public const ACCOUNT_BALANCE = 1;

    /** Account balance summary card. */
    public const AVERAGE_MONTHLY_VALUE = 2;

    /** Last 30 days visits summary card. */
    public const LAST_MONTH_VISIT = 10;

    /** Last visit summary card. */
    public const LAST_VISIT = 3;

    /** Late cancel summary card. */
    public const LATE_CANCEL = 4;

    /** Lifetime value summary card. */
    public const LIFETIME_VALUE = 5;

    /** Lifetime visits summary card. */
    public const LIFETIME_VISITS = 6;

    /** Next visit summary card. */
    public const NEXT_VISIT = 7;

    /** No-shows summary card. */
    public const NO_SHOWS = 8;

    /** Referrals summary card. */
    public const REFERRALS = 9;
}
