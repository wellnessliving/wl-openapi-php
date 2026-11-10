<?php

namespace WlSdk\Wl\Ticket;

class TicketScanListPostResponseResult
{
    /**
     * Outcome of the ticket, see the description of the class.
     *
     * @var string|null
     */
    public ?string $sid_outcome = null;

    /**
     * Key of the ticket, as it was sent.
     *
     * @var string|null
     */
    public ?string $k_ticket_item = null;

    public function __construct(array $data)
    {
        $this->sid_outcome = isset($data['sid_outcome']) ? (string)$data['sid_outcome'] : null;
        $this->k_ticket_item = isset($data['k_ticket_item']) ? (string)$data['k_ticket_item'] : null;
    }
}
