<?php

namespace WlSdk\Wl\Event\Transfer;

/**
 * Response from GET
 */
class EventTransferGetResponse
{
    /**
     * Information about relation between users:
     *
     * @var EventTransferGetResponseRelation|null
     */
    public ?EventTransferGetResponseRelation $a_relation = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? new EventTransferGetResponseRelation((array)$data['a_relation']) : null;
    }
}
