<?php

namespace WlSdk;

/**
 * List of default categories of the rewards.
 *
 * Last used ID: 7
 *
 * Values:
 * - 1 (`ATTENDANCE`): Booking and visiting rewards
 * - 2 (`PURCHASE`): Rewards for spending money.
 * - 7 (`REFER`): Rewards for referrals.
 * - 3 (`REVIEW`): Rewards for reviewing a business.
 * - 4 (`SOCIAL`): Social networks rewards.
 * - 5 (`USER`): Rewards for significant user events.
 */
class RsRewardActionCategorySid
{
    /** Booking and visiting rewards */
    public const ATTENDANCE = 1;

    /** Rewards for spending money. */
    public const PURCHASE = 2;

    /** Rewards for referrals. */
    public const REFER = 7;

    /** Rewards for reviewing a business. */
    public const REVIEW = 3;

    /** Social networks rewards. */
    public const SOCIAL = 4;

    /** Rewards for significant user events. */
    public const USER = 5;
}
