<?php

namespace WlSdk\Wl\Alert;

class AlertListGetResponsePinned
{
    /**
     * Task key.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    /**
     * Who the task is assigned to and, when there is one, the client: "Assigned to Alice for Bob". An empty
     *   string when no assignee gets a name.
     *
     * @var string|null
     */
    public ?string $text_assign = null;

    /**
     * The due date and time in the time zone of the business, as the page of the Task Manager shows a date: "Due
     *   on Mon, Nov 2, 2026 at 10:00am".
     *
     * @var string|null
     */
    public ?string $text_due = null;

    /**
     * How late the task is: "2 days overdue". A pinned task is late 1 day or more.
     *
     * @var string|null
     */
    public ?string $text_overdue = null;

    /**
     * The name of the task, in full.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The address of the Task Manager that opens the form of the task, for example
     *   `https://example.com/Wl/Task/Manager.html?is_all=1&k_task=112811`.
     *
     * @var string|null
     */
    public ?string $url_task = null;

    public function __construct(array $data)
    {
        $this->k_task = isset($data['k_task']) ? (string)$data['k_task'] : null;
        $this->text_assign = isset($data['text_assign']) ? (string)$data['text_assign'] : null;
        $this->text_due = isset($data['text_due']) ? (string)$data['text_due'] : null;
        $this->text_overdue = isset($data['text_overdue']) ? (string)$data['text_overdue'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_task = isset($data['url_task']) ? (string)$data['url_task'] : null;
    }
}
