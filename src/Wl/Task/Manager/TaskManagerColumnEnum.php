<?php

namespace WlSdk\Wl\Task\Manager;

/**
 * A column of the table of the Task Manager.
 *
 * A staff member shows, hides and orders the columns in the panel "Columns" of the page; the shown columns in their
 * order are kept by {@link \WlSdk\Wl\User\Config\Option\OptionAbstract}.
 *
 * Last used ID: 7.
 *
 * Values:
 * - 2 (`CLIENT`): The client of the task.
 * - 5 (`CREATE`): The staff member who created the task.
 * - 7 (`DATE_ADD`): The date and the time when the task was created. Hidden by default.
 * - 4 (`DUE`): The date and the time when the task is due.
 * - 3 (`STAFF`): The staff member the task is assigned to.
 * - 6 (`STATUS`): The status of the task.
 * - 1 (`TASK`): The name and the description of the task. Always shown: a row without it cannot be read.
 */
class TaskManagerColumnEnum
{
    /** The client of the task. */
    public const CLIENT = 2;

    /** The staff member who created the task. */
    public const CREATE = 5;

    /** The date and the time when the task was created. Hidden by default. */
    public const DATE_ADD = 7;

    /** The date and the time when the task is due. */
    public const DUE = 4;

    /** The staff member the task is assigned to. */
    public const STAFF = 3;

    /** The status of the task. */
    public const STATUS = 6;

    /** The name and the description of the task. Always shown: a row without it cannot be read. */
    public const TASK = 1;
}
