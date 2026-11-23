<?php

namespace WlSdk\Wl\Task\Manager;

class TaskManagerListGetResponseRow
{
    /**
     * Whether the signed-in staff member may change the task with the bulk actions of the page and edit it: they
     * have
     * the privilege to edit tasks, and the privilege for all tasks or the task is assigned to them. The page lets
     * them select only such tasks. {@link \WlSdk\Wl\Task\Manager\TaskBulk} checks the same right again for every
     * task.
     *
     * @var bool|null
     */
    public ?bool $can_edit = null;

    /**
     * The date and the time when the task was created, in the time zone of the business, MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_add = null;

    /**
     * The date and the time when the task is due, in the time zone of the business, MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_due = null;

    /**
     * The description of the task, made into HTML from the visual editor. An empty string without one.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * The status of the task. One of {@link \WlSdk\Wl\Task\TaskStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\TaskStatusSid
     */
    public ?int $id_task_status = null;

    /**
     * Whether the task is overdue: it is not completed, and its due date and time have passed. The row is overdue
     * on
     * every tab, not only on the tab Overdue.
     *
     * @var bool|null
     */
    public ?bool $is_late = null;

    /**
     * Key of the business of the task: the business of the request, or another location of a franchise in the
     * flexible travel mode.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Task key.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    /**
     * The date and the time when the task was created, as the page shows it: "Fri, Dec 30, 2022 at 3:00 pm".
     *
     * @var string|null
     */
    public ?string $text_add = null;

    /**
     * The email of the client. An empty string when the task has no client or the client has no email.
     *
     * @var string|null
     */
    public ?string $text_client_mail = null;

    /**
     * The ID of the client in the business. An empty string when the task has no client or the client has none.
     *
     * @var string|null
     */
    public ?string $text_client_member = null;

    /**
     * The full name of the client. An empty string when the task has no client.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    /**
     * The cell phone of the client, formatted. An empty string when the task has no client or the client has no
     * cell phone.
     *
     * @var string|null
     */
    public ?string $text_client_phone = null;

    /**
     * Who created the task. An empty string when the task keeps no author.
     *
     * @var string|null
     */
    public ?string $text_create = null;

    /**
     * The date and the time when the task is due, as the page shows it: "Fri, Dec 30, 2022 at 3:00 pm".
     *
     * @var string|null
     */
    public ?string $text_due = null;

    /**
     * How late the task is, as the page shows it under the due date: "2 days overdue" for whole days of 24 hours,
     * "Overdue" when the task is late less than a day. An empty string when the task is not overdue.
     *
     * @var string|null
     */
    public ?string $text_overdue = null;

    /**
     * Text that tells how the task repeats, such as "Repeats every week on Friday". An empty string if the task
     * does not repeat.
     *
     * @var string|null
     */
    public ?string $text_repeat = null;

    /**
     * The full name of the staff member the task is assigned to. An empty string when that user is no staff member
     * of the business of the task.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * The name of the task.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Key of the client of the task. `null` when the task has no client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Key of the user the task is assigned to.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * The address of the photo of the client. An empty string when the task has no client or the client has no
     * photo.
     *
     * @var string|null
     */
    public ?string $url_client_photo = null;

    /**
     * The address of the page Overview of the profile of the client. An empty string when the task has no
     * client.
     *
     * @var string|null
     */
    public ?string $url_client_profile = null;

    /**
     * The address of the form of a new task that is a copy of the task, filled in from the saved task. It is the
     * address of `url_edit` with  in the query in place of
     * `k_task`: `<address>?k_task_duplicate=<key of the task>`.
     *
     * @var string|null
     */
    public ?string $url_duplicate = null;

    /**
     * The address of the form that edits the task.
     *
     * @var string|null
     */
    public ?string $url_edit = null;

    /**
     * The address of the profile of the staff member the task is assigned to, as the old report linked it. An
     * empty string when that user is no staff member of the business of the page: a staff member of another
     * location of a franchise has no profile here.
     *
     * @var string|null
     */
    public ?string $url_staff = null;

    public function __construct(array $data)
    {
        $this->can_edit = isset($data['can_edit']) ? (bool)$data['can_edit'] : null;
        $this->dtl_add = isset($data['dtl_add']) ? (string)$data['dtl_add'] : null;
        $this->dtl_due = isset($data['dtl_due']) ? (string)$data['dtl_due'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->id_task_status = isset($data['id_task_status']) ? (int)$data['id_task_status'] : null;
        $this->is_late = isset($data['is_late']) ? (bool)$data['is_late'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_task = isset($data['k_task']) ? (string)$data['k_task'] : null;
        $this->text_add = isset($data['text_add']) ? (string)$data['text_add'] : null;
        $this->text_client_mail = isset($data['text_client_mail']) ? (string)$data['text_client_mail'] : null;
        $this->text_client_member = isset($data['text_client_member']) ? (string)$data['text_client_member'] : null;
        $this->text_client_name = isset($data['text_client_name']) ? (string)$data['text_client_name'] : null;
        $this->text_client_phone = isset($data['text_client_phone']) ? (string)$data['text_client_phone'] : null;
        $this->text_create = isset($data['text_create']) ? (string)$data['text_create'] : null;
        $this->text_due = isset($data['text_due']) ? (string)$data['text_due'] : null;
        $this->text_overdue = isset($data['text_overdue']) ? (string)$data['text_overdue'] : null;
        $this->text_repeat = isset($data['text_repeat']) ? (string)$data['text_repeat'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->url_client_photo = isset($data['url_client_photo']) ? (string)$data['url_client_photo'] : null;
        $this->url_client_profile = isset($data['url_client_profile']) ? (string)$data['url_client_profile'] : null;
        $this->url_duplicate = isset($data['url_duplicate']) ? (string)$data['url_duplicate'] : null;
        $this->url_edit = isset($data['url_edit']) ? (string)$data['url_edit'] : null;
        $this->url_staff = isset($data['url_staff']) ? (string)$data['url_staff'] : null;
    }
}
