<?php

namespace WlSdk\Wl\Ticket;

class TicketScanListPostResponseResult
{
    /**
     * Outcome of the ticket, see the description of the class.
     *
     * @var string|null
     */
    public ?string $id_outcome = null;

    /**
     * Key of the ticket, as it was sent.
     *
     * @var string|null
     */
    public ?string $k_ticket_item = null;

    public function __construct(array $data)
    {
        $this->id_outcome = isset($data['id_outcome']) ? (string)$data['id_outcome'] : null;
        $this->k_ticket_item = isset($data['k_ticket_item']) ? (string)$data['k_ticket_item'] : null;
    }
}
