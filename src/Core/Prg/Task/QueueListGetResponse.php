<?php

namespace WlSdk\Core\Prg\Task;

/**
 * Response from GET
 */
class QueueListGetResponse
{
    /**
     * List of queue. One element contains:
     *
     * @var QueueListGetResponseQueue[]|null
     */
    public ?array $a_queue = null;

    public function __construct(array $data)
    {
        $this->a_queue = isset($data['a_queue']) ? array_map(static fn ($item) => new QueueListGetResponseQueue((array)$item), (array)$data['a_queue']) : null;
    }
}
