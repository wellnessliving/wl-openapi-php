<?php
namespace WlSdk;

/**
 * Program types.
 * 
 * Usually type includes type and category.
 * 
 * Last used ID: 25.
 * 
 * Values:
 * - 21 (`ACCOUNT_MEMBERSHIP`): Special Membership that does not allow client to visit anything but fill client's
 * account after purchase
 *   and after renew.
 * - 20 (`ACCOUNT_PASS`): Special Time-Based pass that does not allow client to visit anything but fill client's
 * account after purchase
 *   and after renew.
 * - 25 (`CLASS_GUEST`): Class Guest pass.
 * - 1 (`CLASS_LIMIT`): Class Pass.
 * - 5 (`CLASS_MEMBERSHIP`): Class Membership.
 * - 6 (`CLASS_PASS`): Class Time-Based pass.
 * - 4 (`CLASS_PROSPECT`): WellnessLiving Promotion.
 * - 7 (`DEAL`): Daily Deal Integration: not for sale, only redemption codes.
 * - 14 (`ENROLLMENT`): Enrollment.
 * - 22 (`INSURANCE_MEMBERSHIP`): "Wellness Program" membership.
 * - 3 (`PACKAGE`): Package.
 * - 19 (`RESOURCE_DURATION`): Resource Duration Pass.
 * - 15 (`RESOURCE_LIMIT`): Resource Limit Pass.
 * - 16 (`RESOURCE_MEMBERSHIP`): Resource Membership.
 * - 17 (`RESOURCE_PASS`): Resource Time-Based pass.
 * - 18 (`SERVICE_DURATION`): Appointment Duration Pass.
 * - 11 (`SERVICE_LIMIT`): Appointment session pass.
 * - 12 (`SERVICE_MEMBERSHIP`): Appointment membership.
 * - 13 (`SERVICE_PASS`): Appointment Time-Based pass.
 * - 23 (`VIDEO_MEMBERSHIP`): Video Membership.
 * - 24 (`VISIT_GUEST`): Gym Guest pass.
 * - 8 (`VISIT_LIMIT`): Gym Pass.
 * - 9 (`VISIT_MEMBERSHIP`): Gym Membership.
 * - 10 (`VISIT_PASS`): Gym Time-Based pass.
 */
enum RsProgramSid: int
{
    case ACCOUNT_MEMBERSHIP = 21;
    case ACCOUNT_PASS = 20;
    case CLASS_GUEST = 25;
    case CLASS_LIMIT = 1;
    case CLASS_MEMBERSHIP = 5;
    case CLASS_PASS = 6;
    case CLASS_PROSPECT = 4;
    case DEAL = 7;
    case ENROLLMENT = 14;
    case INSURANCE_MEMBERSHIP = 22;
    case PACKAGE = 3;
    case RESOURCE_DURATION = 19;
    case RESOURCE_LIMIT = 15;
    case RESOURCE_MEMBERSHIP = 16;
    case RESOURCE_PASS = 17;
    case SERVICE_DURATION = 18;
    case SERVICE_LIMIT = 11;
    case SERVICE_MEMBERSHIP = 12;
    case SERVICE_PASS = 13;
    case VIDEO_MEMBERSHIP = 23;
    case VISIT_GUEST = 24;
    case VISIT_LIMIT = 8;
    case VISIT_MEMBERSHIP = 9;
    case VISIT_PASS = 10;
}
