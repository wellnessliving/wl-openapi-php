<?php

namespace WlSdk\Wl\Ticket;

class TicketListGetResponseLocation
{
    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Title of the location.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
