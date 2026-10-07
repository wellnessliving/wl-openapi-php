<?php

namespace WlSdk\Wl\Ticket;

class TicketListGetResponseOrderType
{
    /**
     * Number of not cancelled tickets of this type in the order.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Key of the ticket type. Key of the ticket type.
     *
     * @var string|null
     */
    public ?string $k_ticket_option = null;

    /**
     * Name of the ticket type.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->k_ticket_option = isset($data['k_ticket_option']) ? (string)$data['k_ticket_option'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
