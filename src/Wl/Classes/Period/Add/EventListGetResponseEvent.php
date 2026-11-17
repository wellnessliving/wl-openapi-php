<?php

namespace WlSdk\Wl\Classes\Period\Add;

class EventListGetResponseEvent
{
    /**
     * Key of the event instance which represents the enrollment block.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Title of the event.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
