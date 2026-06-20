<?php
namespace WlSdk;

/**
 * Program types.
 * 
 * See [RsProgramSid](#/components/schemas/RsProgramSid) for a list of promotions.
 * 
 * Last used ID: 8.
 * 
 * Values:
 * - 7 (`DURATION`): Duration Pass.
 * 
 *   Differs from [RsProgramTypeSid::LIMIT](#/components/schemas/RsProgramTypeSid) in that this type of promotion is
 * limited by time.
 * - 8 (`GUEST`): Guest passes.
 * - 1 (`LIMIT`): Class pass.
 * 
 *   Differs from [RsProgramTypeSid::PASS](#/components/schemas/RsProgramTypeSid) in that this type of promotion allows
 * access to only a limited number
 *   of classes.
 * - 3 (`MEMBERSHIP`): This promotion is a membership.
 * 
 *   Payment schedule can be set up for memberships.
 * - 6 (`OTHER`): Type for programs that are not presented in [RsProgramSid](#/components/schemas/RsProgramSid).
 * - 4 (`PACKAGE`): Packages and Daily deals.
 * - 2 (`PASS`): Unlimited pass. Day/week/month pass.
 * 
 *   Allows access to unlimited number of classes.
 * 
 *   Differs from [RsProgramTypeSid::MEMBERSHIP](#/components/schemas/RsProgramTypeSid) in that this type of promotion
 * can only be paid once.
 * - 5 (`PROSPECT`): Special WellnessLiving promote passes that allow to visit specific classes to get acquainted with
 * the business.
 * 
 *   Such passes cannot be bought, they can be only components of the special system packages,
 *   packages with `k_business` = `null`.
 */
enum RsProgramTypeSid: int
{
    case DURATION = 7;
    case GUEST = 8;
    case LIMIT = 1;
    case MEMBERSHIP = 3;
    case OTHER = 6;
    case PACKAGE = 4;
    case PASS = 2;
    case PROSPECT = 5;
}
