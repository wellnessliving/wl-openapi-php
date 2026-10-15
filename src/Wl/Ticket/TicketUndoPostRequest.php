<?php

namespace WlSdk\Wl\Ticket;

class TicketUndoPostRequest
{
    /**
     * Start of the session, in UTC and MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the class period the session belongs to.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Key of the ticket to undo the check-in of.
     *
     * @var string|null
     */
    public ?string $k_ticket_item = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_start' => $this->dtu_start,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'k_ticket_item' => $this->k_ticket_item,
            ],
            static fn ($v) => $v !== null
        );
    }
}
