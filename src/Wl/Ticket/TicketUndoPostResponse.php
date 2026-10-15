<?php

namespace WlSdk\Wl\Ticket;

/**
 * Response from POST
 */
class TicketUndoPostResponse
{
    /**
     * Number of the tickets checked in for the session after the call.
     *
     * @var int|null
     */
    public ?int $i_attend = null;

    /**
     * Number of the tickets sold for the session: not cancelled ones, including those whose holders have not come.
     *
     * @var int|null
     */
    public ?int $i_sold = null;

    public function __construct(array $data)
    {
        $this->i_attend = isset($data['i_attend']) ? (int)$data['i_attend'] : null;
        $this->i_sold = isset($data['i_sold']) ? (int)$data['i_sold'] : null;
    }
}
