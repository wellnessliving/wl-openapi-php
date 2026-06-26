<?php

namespace WlSdk\Core\Prg\Task;

class ThreadListGetResponseThread
{
    /**
     * Is it possible to remove a thread. `true` is the thread can be remove, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_remove = null;

    /**
     * When the last action was performed by this thread.
     *
     * @var string|null
     */
    public ?string $dtu_active = null;

    /**
     * When this thread has started.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * When method that is being executed now has started.
     *
     * @var string|null
     */
    public ?string $dtu_current = null;

    /**
     * Sort number.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

    /**
     * Status of the thread. One of {@link \WlSdk\CmsTaskStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\CmsTaskStatusSid
     */
    public ?int $id_task_status = null;

    /**
     * Whether the thread has been deleted. `true` is the thread is removed, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

    /**
     * IP address (local) of the server where the task thread takes place.
     *
     * @var string|null
     */
    public ?string $ip_server = null;

    /**
     * Name of a method that is being executed now.
     *
     * @var string|null
     */
    public ?string $s_method = null;

    /**
     * Title of the thread status.
     *
     * @var string|null
     */
    public ?string $s_task_status = null;

    /**
     * Key of this thread.
     *
     * @var string|null
     */
    public ?string $s_thread = null;

    /**
     * Short key of this thread.
     *
     * @var string|null
     */
    public ?string $s_thread_short = null;

    /**
     * When the last action was performed by this thread.
     *
     * @var string|null
     */
    public ?string $text_active = null;

    /**
     * Lifetime of thread formatted using the PrgCmsTaskThreadView::timeFormat() method.
     *
     * @var string|null
     */
    public ?string $text_create = null;

    /**
     * When method that is being executed now has started.
     *
     * @var string|null
     */
    public ?string $text_current = null;

    /**
     * Any additional info set at moment of `t_active`. Copy of argument of CmsTaskThread::active().
     *
     * @var string|null
     */
    public ?string $text_info = null;

    /**
     * The comment that was set when this task thread is removed.
     *
     * @var string|null
     */
    public ?string $text_remove = null;

    public function __construct(array $data)
    {
        $this->can_remove = isset($data['can_remove']) ? (bool)$data['can_remove'] : null;
        $this->dtu_active = isset($data['dtu_active']) ? (string)$data['dtu_active'] : null;
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->dtu_current = isset($data['dtu_current']) ? (string)$data['dtu_current'] : null;
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->id_task_status = isset($data['id_task_status']) ? (int)$data['id_task_status'] : null;
        $this->is_remove = isset($data['is_remove']) ? (bool)$data['is_remove'] : null;
        $this->ip_server = isset($data['ip_server']) ? (string)$data['ip_server'] : null;
        $this->s_method = isset($data['s_method']) ? (string)$data['s_method'] : null;
        $this->s_task_status = isset($data['s_task_status']) ? (string)$data['s_task_status'] : null;
        $this->s_thread = isset($data['s_thread']) ? (string)$data['s_thread'] : null;
        $this->s_thread_short = isset($data['s_thread_short']) ? (string)$data['s_thread_short'] : null;
        $this->text_active = isset($data['text_active']) ? (string)$data['text_active'] : null;
        $this->text_create = isset($data['text_create']) ? (string)$data['text_create'] : null;
        $this->text_current = isset($data['text_current']) ? (string)$data['text_current'] : null;
        $this->text_info = isset($data['text_info']) ? (string)$data['text_info'] : null;
        $this->text_remove = isset($data['text_remove']) ? (string)$data['text_remove'] : null;
    }
}
