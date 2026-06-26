<?php

namespace WlSdk\Wl\Business\Account\Subscription\UnsubscribeReason;

/**
 * List of reasons for unsubscribing from the
 * [SubscriptionAbstract](#/components/schemas/Wl.Business.Account.Subscription.SubscriptionAbstract).
 *
 * Last ID: 9.
 *
 * Values:
 * - 8 (`HAVE_CONCERNS`): Privacy, ethical or security concerns.
 * - 3 (`NOT_ENOUGH_VALUE`): Not enough value.
 * - 9 (`OTHER`): Other reason.
 * - 2 (`TOO_EXPENSIVE`): Too expensive.
 * - 1 (`USE_ANOTHER`): Use another tool.
 */
class UnsubscribeReasonSid
{
    /** Privacy, ethical or security concerns. */
    public const HAVE_CONCERNS = 8;

    /** Not enough value. */
    public const NOT_ENOUGH_VALUE = 3;

    /** Other reason. */
    public const OTHER = 9;

    /** Too expensive. */
    public const TOO_EXPENSIVE = 2;

    /** Use another tool. */
    public const USE_ANOTHER = 1;
}
