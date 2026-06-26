<?php

namespace WlSdk\Core\Prg\Task;

class QueueListGetResponseQueue
{
    /**
     * CID of the task class. One of {@link \WlSdk\Core\Task\CoreTaskAbstract} classes.
     *
     * @var int|null
     * @see \WlSdk\Core\Task\CoreTaskAbstract
     */
    public ?int $cid_task = null;

    /**
     * Task start time. `null` for erroneous tasks.
     *
     * @var string|null
     */
    public ?string $dtu_queue = null;

    /**
     * Whether the task is currently running.
     * `true` if the task is currently running, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Copy of {@link \WlSdk\Core\Task\CoreTaskAbstract}.
     * `true` if tasks of this class require special attention when removing,
     * `false` if they can be removed safely.
     *
     * @var bool|null
     */
    public ?bool $is_safe = null;

    /**
     * Class name. One of the {@link \WlSdk\Core\Task\CoreTaskAbstract} subclasses.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * ID of the task. Copy of CmsTaskQueueSql.`s_id`.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * Task ID prefix. This can be a class name or an CID.
     *
     * @var string|null
     */
    public ?string $s_prefix = null;

    /**
     * Time elapsed since the start of the task. Difference between `dtu_queue` field and current time
     * formatted using the PrgCmsTaskThreadView::timeFormat() method.
     * `null` for erroneous tasks.
     *
     * @var string|null
     */
    public ?string $s_queue = null;

    public function __construct(array $data)
    {
        $this->cid_task = isset($data['cid_task']) ? (int)$data['cid_task'] : null;
        $this->dtu_queue = isset($data['dtu_queue']) ? (string)$data['dtu_queue'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_safe = isset($data['is_safe']) ? (bool)$data['is_safe'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
        $this->s_prefix = isset($data['s_prefix']) ? (string)$data['s_prefix'] : null;
        $this->s_queue = isset($data['s_queue']) ? (string)$data['s_queue'] : null;
    }
}
