<?php

namespace WlSdk\Wl\Business\Franchise\Push\TaskMonitor;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * The list of tasks.
     *
     * @var array[]|null
     */
    public ?array $a_queue = null;

    public function __construct(array $data)
    {
        $this->a_queue = isset($data['a_queue']) ? (array)$data['a_queue'] : null;
    }
}
