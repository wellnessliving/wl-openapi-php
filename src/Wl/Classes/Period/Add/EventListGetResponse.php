<?php

namespace WlSdk\Wl\Classes\Period\Add;

/**
 * Response from GET
 */
class EventListGetResponse
{
    /**
     * List of events sorted by title. One entry for each enrollment block.
     *
     * Each element has the following structure:
     *
     * @var EventListGetResponseEvent[]|null
     */
    public ?array $a_event = null;

    public function __construct(array $data)
    {
        $this->a_event = isset($data['a_event']) ? array_map(static fn ($item) => new EventListGetResponseEvent((array)$item), (array)$data['a_event']) : null;
    }
}
