<?php

namespace WlSdk\Wl\Task\Manager;

/**
 * A view of the Task Manager: whose tasks the list shows.
 *
 * The views panel of the page picks a view. A role is a view of the tasks of the staff members who have that role now,
 * the role itself is given beside the view (`k_business_role` and
 * `id_privilege_role`).
 *
 * Last used ID: 3.
 *
 * Values:
 * - 1 (`ALL`): The tasks of every staff member whose tasks the user may see. The default.
 * - 2 (`MINE`): The tasks of the signed-in staff member.
 * - 3 (`ROLE`): The tasks of the staff members who have a staff role now.
 */
class TaskManagerViewEnum
{
    /** The tasks of every staff member whose tasks the user may see. The default. */
    public const ALL = 1;

    /** The tasks of the signed-in staff member. */
    public const MINE = 2;

    /** The tasks of the staff members who have a staff role now. */
    public const ROLE = 3;
}
