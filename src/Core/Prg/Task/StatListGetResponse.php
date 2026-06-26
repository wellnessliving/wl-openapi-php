<?php

namespace WlSdk\Core\Prg\Task;

/**
 * Response from GET
 */
class StatListGetResponse
{
    /**
     * List of queue. One element contains:
     *
     * @var StatListGetResponseQueue[]|null
     */
    public ?array $a_queue = null;

    /**
     * List of task queue statistic per class.
     *
     * This statistic includes all tasks that are due or erroneous tasks, while `a_queue` contains only
     * the `DISPLAYED_QUEUE` of the oldest tasks for the queue or
     * the `DISPLAYED_ERRONEOUS` of the erroneous tasks.
     *
     * One element contains:
     *
     * @var StatListGetResponseQueueStat[]|null
     */
    public ?array $a_queue_stat = null;

    public function __construct(array $data)
    {
        $this->a_queue = isset($data['a_queue']) ? array_map(static fn ($item) => new StatListGetResponseQueue((array)$item), (array)$data['a_queue']) : null;
        $this->a_queue_stat = isset($data['a_queue_stat']) ? array_map(static fn ($item) => new StatListGetResponseQueueStat((array)$item), (array)$data['a_queue_stat']) : null;
    }
}
