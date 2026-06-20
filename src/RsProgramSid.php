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
class RsProgramSid
{
    /** Special Membership that does not allow client to visit anything but fill client's account after purchase */
    public const ACCOUNT_MEMBERSHIP = 21;

    /** Special Time-Based pass that does not allow client to visit anything but fill client's account after purchase */
    public const ACCOUNT_PASS = 20;

    /** Class Guest pass. */
    public const CLASS_GUEST = 25;

    /** Class Pass. */
    public const CLASS_LIMIT = 1;

    /** Class Membership. */
    public const CLASS_MEMBERSHIP = 5;

    /** Class Time-Based pass. */
    public const CLASS_PASS = 6;

    /** WellnessLiving Promotion. */
    public const CLASS_PROSPECT = 4;

    /** Daily Deal Integration: not for sale, only redemption codes. */
    public const DEAL = 7;

    /** Enrollment. */
    public const ENROLLMENT = 14;

    /** "Wellness Program" membership. */
    public const INSURANCE_MEMBERSHIP = 22;

    /** Package. */
    public const PACKAGE = 3;

    /** Resource Duration Pass. */
    public const RESOURCE_DURATION = 19;

    /** Resource Limit Pass. */
    public const RESOURCE_LIMIT = 15;

    /** Resource Membership. */
    public const RESOURCE_MEMBERSHIP = 16;

    /** Resource Time-Based pass. */
    public const RESOURCE_PASS = 17;

    /** Appointment Duration Pass. */
    public const SERVICE_DURATION = 18;

    /** Appointment session pass. */
    public const SERVICE_LIMIT = 11;

    /** Appointment membership. */
    public const SERVICE_MEMBERSHIP = 12;

    /** Appointment Time-Based pass. */
    public const SERVICE_PASS = 13;

    /** Video Membership. */
    public const VIDEO_MEMBERSHIP = 23;

    /** Gym Guest pass. */
    public const VISIT_GUEST = 24;

    /** Gym Pass. */
    public const VISIT_LIMIT = 8;

    /** Gym Membership. */
    public const VISIT_MEMBERSHIP = 9;

    /** Gym Time-Based pass. */
    public const VISIT_PASS = 10;
}
