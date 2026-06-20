<?php
namespace WlSdk\Wl\Event;

/**
 * Response from GET
 */
class EventListGetResponse
{
    /**
     * List of available enrollment blocks matching the requested parameters.
     * 
     * Key is the enrollment block key.
     * Value is the title of the first event found in that enrollment block.
     *
     * @var string[]|null
     */
    public ?array $a_enrollment_block_list = null;

    /**
     * A list of events corresponding to requested parameters.
     *
     * @var EventListGetResponseEventList[]|null
     */
    public ?array $a_event_list = null;

    public function __construct(array $data)
    {
        $this->a_enrollment_block_list = isset($data['a_enrollment_block_list']) ? (array)$data['a_enrollment_block_list'] : null;
        $this->a_event_list = isset($data['a_event_list']) ? array_map(static fn($item) => new EventListGetResponseEventList((array)$item), (array)$data['a_event_list']) : null;
    }
}
