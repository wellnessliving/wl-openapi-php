<?php
namespace WlSdk\Wl\Event\Book\EventList;

/**
 * Response from GET
 */
class ListApiGetResponse
{
    /**
     * A list of event identifiers.
     * 
     * The order of items in this array matches the order in which elements should be displayed.
     *
     * @var string[]|null
     */
    public ?array $a_event = null;

    /**
     * Event availability map.
     * 
     * Unavailable events are those that cannot be booked,
     *  but they can be shown to the client (for example, under the "not available" filter).
     * 
     * Key is the event class key.
     * Value is `true` if the event is available for booking, `false` if it is unavailable.
     *
     * @var bool[]|null
     */
    public ?array $a_event_available = null;

    /**
     * `true` if exist at least one virtual event
     * by specific `k_business` and
     * `k_class_tab`,
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual_service = null;

    public function __construct(array $data)
    {
        $this->a_event = isset($data['a_event']) ? (array)$data['a_event'] : null;
        $this->a_event_available = isset($data['a_event_available']) ? (array)$data['a_event_available'] : null;
        $this->is_virtual_service = isset($data['is_virtual_service']) ? (bool)$data['is_virtual_service'] : null;
    }
}
