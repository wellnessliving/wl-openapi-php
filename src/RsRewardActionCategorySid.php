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
enum RsRewardActionCategorySid: int
{
    case ATTENDANCE = 1;
    case PURCHASE = 2;
    case REFER = 7;
    case REVIEW = 3;
    case SOCIAL = 4;
    case USER = 5;
}
