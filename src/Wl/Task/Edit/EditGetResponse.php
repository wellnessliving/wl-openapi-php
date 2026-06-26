<?php

namespace WlSdk\Wl\Task\Edit;

/**
 * Response from GET
 */
class EditGetResponse
{
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

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->dl_due = isset($data['dl_due']) ? (string)$data['dl_due'] : null;
        $this->id_task_status = isset($data['id_task_status']) ? (int)$data['id_task_status'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->tl_due = isset($data['tl_due']) ? (string)$data['tl_due'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
