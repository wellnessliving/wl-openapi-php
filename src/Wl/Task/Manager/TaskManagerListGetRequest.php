<?php

namespace WlSdk\Wl\Task\Manager;

class TaskManagerListGetRequest
{
    /**
     * The locations of the staff members whose tasks are shown, for a franchise in the flexible travel mode. One
     * of
     * {@link \WlSdk\Wl\Report\Filter\TaskLocation\TaskLocationSid} constants each.
     * `null` to show the tasks of the staff of the home location, which is the default in that mode; both
     * locations to
     * show every location. Ignored outside that mode.
     *
     * @var int[]|null
     */
    public ?array $a_task_location = null;

    /**
     * The statuses of the tasks to show. One of {@link \WlSdk\Wl\Task\TaskStatusSid} constants each.
     * `null` to show the tasks of every status.
     *
     * @var int[]|null
     */
    public ?array $a_task_status = null;

    /**
     * Keys of the staff members whose tasks are shown.
     * `null` to show the tasks of every staff member the user may see.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff = null;

    /**
     * The last day of the due dates of the shown tasks, in the time zone of the business, MySQL format.
     * `null` for no limit.
     *
     * @var string|null
     */
    public ?string $dl_due_end = null;

    /**
     * The first day of the due dates of the shown tasks, in the time zone of the business, MySQL format.
     * `null` for no limit.
     *
     * @var string|null
     */
    public ?string $dl_due_start = null;

    /**
     * The number of the page, from 1. The first page when it is not given.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * How many tasks a page has: 25, 50 or 100. 25 when it is not given.
     *
     * @var int|null
     */
    public ?int $i_page_size = null;

    /**
     * The column that sorts the list. One of {@link \WlSdk\Wl\Task\Manager\TaskManagerColumnEnum} cases but Date
     * created.
     * `null` to sort by the due date.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Manager\TaskManagerColumnEnum
     */
    public ?int $id_column_sort = null;

    /**
     * The system role of the view of a role, a system role that the business has not changed. One of
     * {@link \WlSdk\RsPrivilegeRoleSid} constants. Given for the view {@link
     * \WlSdk\Wl\Task\Manager\TaskManagerViewEnum} and for a system role
     * only. `null` for every other view and for a role of the business ({@link
     * \WlSdk\Wl\Task\Manager\TaskManagerList}).
     *
     * @var int|null
     * @see \WlSdk\RsPrivilegeRoleSid
     */
    public ?int $id_privilege_role = null;

    /**
     * The view of the list: whose tasks it shows. One of {@link \WlSdk\Wl\Task\Manager\TaskManagerViewEnum} cases.
     * `null` for the view of every staff member the user may see.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Manager\TaskManagerViewEnum
     */
    public ?int $id_view = null;

    /**
     * Whether the list is sorted in the reverse order: Z to A, newest first.
     * `null` for the direct order.
     *
     * @var bool|null
     */
    public ?bool $is_sort_desc = null;

    /**
     * Key of the business of the page.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the role of the business of the view of a role.
     * Given for the view {@link \WlSdk\Wl\Task\Manager\TaskManagerViewEnum} and for a role of the business only.
     * `null` for every other
     * view and for a system role ({@link \WlSdk\Wl\Task\Manager\TaskManagerList}).
     *
     * @var string|null
     */
    public ?string $k_business_role = null;

    /**
     * The text to search in the names of the tasks and in the names, the emails and the keys of their clients.
     * `null` not to search.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_task_location' => $this->a_task_location,
            'a_task_status' => $this->a_task_status,
            'a_uid_staff' => $this->a_uid_staff,
            'dl_due_end' => $this->dl_due_end,
            'dl_due_start' => $this->dl_due_start,
            'i_page' => $this->i_page,
            'i_page_size' => $this->i_page_size,
            'id_column_sort' => $this->id_column_sort,
            'id_privilege_role' => $this->id_privilege_role,
            'id_view' => $this->id_view,
            'is_sort_desc' => $this->is_sort_desc,
            'k_business' => $this->k_business,
            'k_business_role' => $this->k_business_role,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
