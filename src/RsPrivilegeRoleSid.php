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
enum RsPrivilegeRoleSid: int
{
    case BUSINESS_OWNER = 1;
    case FRONT_DESK = 4;
    case INSTRUCTOR = 3;
    case LOCATION_OWNER = 2;
}
