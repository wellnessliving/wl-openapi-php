<?php
namespace WlSdk;

/**
 * Payment actors (staff member, user or business owner).
 * 
 * Values:
 * - 3 (`BUSINESS`): Business owner.
 * 
 *   Business owner is a sort of ordinary user. It is used when business acts as a user - for example, pays for
 * business
 *   account to system business.
 * - 1 (`STAFF`): Staff member.
 * 
 *   The payment is performed by staff (business owner, or administrator within a business backend) on
 *   behalf of a user.
 * - 2 (`USER`): User.
 * 
 *   The payment is performed by the user.
 */
class RsPayActorSid
{
    /** Business owner. */
    const BUSINESS = 3;
    /** Staff member. */
    const STAFF = 1;
    /** User. */
    const USER = 2;
}
