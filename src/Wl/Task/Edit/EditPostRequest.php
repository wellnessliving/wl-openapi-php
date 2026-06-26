<?php

namespace WlSdk\Wl\Task\Edit;

class EditPostRequest
{
    /**
     * Business key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Task key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    /**
     * List of staff keys assigned to task.
     *
     * Empty array means not set.
     *
     * @var array|null
     */
    public ?array $a_staff = null;

    /**
     * Due date.
     *
     * @var string|null
     */
    public ?string $dl_due = null;

    /**
     * Task status.
     *
     * `null` means not set.
     *
     * @var int|null
     * @see \WlSdk\Wl\Task\TaskStatusSid
     */
    public ?int $id_task_status = null;

    /**
     * Location key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Task title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Due time.
     *
     * @var string|null
     */
    public ?string $tl_due = null;

    /**
     * Client's uid for whom connected task.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Task description.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_task' => $this->k_task,
            'a_staff' => $this->a_staff,
            'dl_due' => $this->dl_due,
            'id_task_status' => $this->id_task_status,
            'k_location' => $this->k_location,
            'text_title' => $this->text_title,
            'tl_due' => $this->tl_due,
            'uid' => $this->uid,
            'xml_description' => $this->xml_description,
            ],
            static fn ($v) => $v !== null
        );
    }
}
