<?php

namespace WlSdk\Wl\Collector;

/**
 * List of user statuses for collectors.
 *
 * Last used ID: 7.
 *
 * Values:
 * - 5 (`FORGIVEN`): User is a debtor that was pending to be sent to collections but was removed from this list.
 * - 1 (`INNOCENT`): User has no debts.
 * - 6 (`OVERDUE`): User who are at least `i_day_due` days past due
 *   before the [CollectionsSubscription](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract)
 * feature turned on.
 * - 2 (`PENDING`): User is a debtor and pending to be sent to collections.
 * - 4 (`SENT`): User is a debtor and already sent to collections.
 * - 3 (`SUSPECT`): User is a debtor but not pending to be sent to collections.
 * - 7 (`SYNC`): Special status of the debt to indicate that it is currently in update state.
 *   For example re-activation of the debt can take a time because it is performed by task.
 */
class DebtStatusSid
{
    /** User is a debtor that was pending to be sent to collections but was removed from this list. */
    public const FORGIVEN = 5;

    /** User has no debts. */
    public const INNOCENT = 1;

    /** User who are at least `i_day_due` days past due */
    public const OVERDUE = 6;

    /** User is a debtor and pending to be sent to collections. */
    public const PENDING = 2;

    /** User is a debtor and already sent to collections. */
    public const SENT = 4;

    /** User is a debtor but not pending to be sent to collections. */
    public const SUSPECT = 3;

    /** Special status of the debt to indicate that it is currently in update state. */
    public const SYNC = 7;
}
