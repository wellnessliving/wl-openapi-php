<?php

namespace WlSdk\Core\Async\QueueServer;

/**
 * Response from GET
 */
class StatWorkerGetResponse
{
    /**
     * A list of workers.
     *
     * @var StatWorkerGetResponseWorker[]|null
     */
    public ?array $a_worker = null;

    public function __construct(array $data)
    {
        $this->a_worker = isset($data['a_worker']) ? array_map(static fn ($item) => new StatWorkerGetResponseWorker((array)$item), (array)$data['a_worker']) : null;
    }
}
