<?php

namespace WlSdk;

/**
 * String identifiers for rs.privilege.role.
 *
 * Do not reorder class constants. It is important during selecting all system roles and custom roles from database.
 *
 * Values:
 * - 1 (`BUSINESS_OWNER`): Staff role business owner.
 * - 4 (`FRONT_DESK`): Staff role front desk.
 * - 3 (`INSTRUCTOR`): Staff role instructor.
 * - 2 (`LOCATION_OWNER`): Staff role location owner.
 */
class RsPrivilegeRoleSid
{
    /** Staff role business owner. */
    public const BUSINESS_OWNER = 1;

    /** Staff role front desk. */
    public const FRONT_DESK = 4;

    /** Staff role instructor. */
    public const INSTRUCTOR = 3;

    /** Staff role location owner. */
    public const LOCATION_OWNER = 2;
}
