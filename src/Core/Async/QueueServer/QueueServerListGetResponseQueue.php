<?php

namespace WlSdk\Core\Async\QueueServer;

class QueueServerListGetResponseQueue
{
    /**
     * Number of times this status was approved.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Status of the queue server.
     * One of {@link \WlSdk\Core\Async\QueueServer\QueueServerStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Async\QueueServer\QueueServerStatusSid
     */
    public ?int $id_status = null;

    /**
     * IP address of the server.
     *
     * @var string|null
     */
    public ?string $ip = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
        $this->ip = isset($data['ip']) ? (string)$data['ip'] : null;
    }
}
