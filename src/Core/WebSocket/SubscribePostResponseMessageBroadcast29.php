<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast29
{
    /**
     * Accumulation process progress.
     *
     * @var float|null
     */
    public ?float $f_progress = null;

    public function __construct(array $data)
    {
        $this->f_progress = isset($data['f_progress']) ? (float)$data['f_progress'] : null;
    }
}
