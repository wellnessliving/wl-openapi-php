<?php

namespace WlSdk\Wl\Task\Manager;

/**
 * Response from GET
 */
class TaskManagerListGetResponse
{
    /**
     * How many tasks each tab of the page has:
     *
     * A count follows the staff filter and not the search or the other filters.
     *
     * @var TaskManagerListGetResponseCount|null
     */
    public ?TaskManagerListGetResponseCount $a_count = null;

    /**
     * The tasks of the page, in the order of the sort:
     *
     * @var TaskManagerListGetResponseRow[]|null
     */
    public ?array $a_row = null;

    /**
     * The staff members that the staff filter offers, sorted by the name:
     *
     * @var TaskManagerListGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * Whether the signed-in user may add tasks.
     *
     * @var bool|null
     */
    public ?bool $can_add = null;

    /**
     * Whether the signed-in user may edit the tasks. Without it the user only changes their status.
     *
     * @var bool|null
     */
    public ?bool $can_edit = null;

    /**
     * Today in the time zone of the business, MySQL format: the day of the tab "Due today".
     *
     * @var string|null
     */
    public ?string $dl_today = null;

    /**
     * How many tasks the selection has over every page.
     *
     * @var int|null
     */
    public ?int $i_total = null;

    /**
     * The tab of the page that the filters of the status and of the date make. One of {@link
     * \WlSdk\Wl\Task\Manager\ManagerTabSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\Manager\ManagerTabSid
     */
    public ?int $id_tab = null;

    /**
     * Whether the page offers the filter of the location: a franchise in the flexible travel mode.
     *
     * @var bool|null
     */
    public ?bool $is_task_location = null;

    /**
     * The address of the form that adds a task.
     *
     * @var string|null
     */
    public ?string $url_add = null;

    public function __construct(array $data)
    {
        $this->a_count = isset($data['a_count']) ? new TaskManagerListGetResponseCount((array)$data['a_count']) : null;
        $this->a_row = isset($data['a_row']) ? array_map(static fn ($item) => new TaskManagerListGetResponseRow((array)$item), (array)$data['a_row']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new TaskManagerListGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->can_add = isset($data['can_add']) ? (bool)$data['can_add'] : null;
        $this->can_edit = isset($data['can_edit']) ? (bool)$data['can_edit'] : null;
        $this->dl_today = isset($data['dl_today']) ? (string)$data['dl_today'] : null;
        $this->i_total = isset($data['i_total']) ? (int)$data['i_total'] : null;
        $this->id_tab = isset($data['id_tab']) ? (int)$data['id_tab'] : null;
        $this->is_task_location = isset($data['is_task_location']) ? (bool)$data['is_task_location'] : null;
        $this->url_add = isset($data['url_add']) ? (string)$data['url_add'] : null;
    }
}
