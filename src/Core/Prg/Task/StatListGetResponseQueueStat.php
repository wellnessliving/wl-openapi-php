<?php

namespace WlSdk\Core\Prg\Task;

class StatListGetResponseQueueStat
{
    /**
     * CID of the task class. One of {@link \WlSdk\Core\Task\CoreTaskAbstract} classes.
     *
     * @var int|null
     * @see \WlSdk\Core\Task\CoreTaskAbstract
     */
    public ?int $cid_task = null;

    /**
     * The oldest tasks start time. `null` for erroneous tasks.
     *
     * @var string|null
     */
    public ?string $dtu_queue = null;

    /**
     * The number of tasks that running at the moment.
     *
     * @var int|null
     */
    public ?int $i_active = null;

    /**
     * The number of tasks.
     *
     * @var int|null
     */
    public ?int $i_all = null;

    /**
     * Class name. One of the {@link \WlSdk\Core\Task\CoreTaskAbstract} subclasses.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Task ID prefix. This can be a class name or an CID.
     *
     * @var string|null
     */
    public ?string $s_prefix = null;

    /**
     * Time elapsed since the oldest task started. Difference between `dtu_queue` field and current time
     * formatted using the PrgCmsTaskThreadView::timeFormat() method.
     * `null` for erroneous tasks.
     *
     * @var string|null
     */
    public ?string $s_queue = null;

    /**
     * The numbers of active tasks to check, the first number is the count of active processes,
     * the second number is the direct count of active tasks for a given class.
     *
     * @var string|null
     */
    public ?string $text_active = null;

    public function __construct(array $data)
    {
        $this->cid_task = isset($data['cid_task']) ? (int)$data['cid_task'] : null;
        $this->dtu_queue = isset($data['dtu_queue']) ? (string)$data['dtu_queue'] : null;
        $this->i_active = isset($data['i_active']) ? (int)$data['i_active'] : null;
        $this->i_all = isset($data['i_all']) ? (int)$data['i_all'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_prefix = isset($data['s_prefix']) ? (string)$data['s_prefix'] : null;
        $this->s_queue = isset($data['s_queue']) ? (string)$data['s_queue'] : null;
        $this->text_active = isset($data['text_active']) ? (string)$data['text_active'] : null;
    }
}
