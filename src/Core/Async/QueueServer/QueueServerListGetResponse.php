<?php

namespace WlSdk\Core\Async\QueueServer;

/**
 * Response from GET
 */
class QueueServerListGetResponse
{
    /**
     * A list of queue servers.
     *
     * @var QueueServerListGetResponseQueue[]|null
     */
    public ?array $a_queue = null;

    public function __construct(array $data)
    {
        $this->a_queue = isset($data['a_queue']) ? array_map(static fn ($item) => new QueueServerListGetResponseQueue((array)$item), (array)$data['a_queue']) : null;
    }
}
