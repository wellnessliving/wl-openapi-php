<?php

namespace WlSdk\Wl\Ticket;

/**
 * Response from POST
 */
class TicketScanListPostResponse
{
    /**
     * Outcome of every ticket of the request, in the order of {@link \WlSdk\Wl\Ticket\TicketScanList} without
     * repeated keys. Every item has the next structure:
     *
     * @var TicketScanListPostResponseResult[]|null
     */
    public ?array $a_result = null;

    /**
     * Number of the tickets already checked in for the session, after the call. Returned once for the whole call.
     *
     * @var int|null
     */
    public ?int $i_attend = null;

    /**
     * Number of the tickets sold for the session, after the call: not cancelled ones, including those whose
     * holders
     * have not come. Returned once for the whole call.
     *
     * @var int|null
     */
    public ?int $i_sold = null;

    public function __construct(array $data)
    {
        $this->a_result = isset($data['a_result']) ? array_map(static fn ($item) => new TicketScanListPostResponseResult((array)$item), (array)$data['a_result']) : null;
        $this->i_attend = isset($data['i_attend']) ? (int)$data['i_attend'] : null;
        $this->i_sold = isset($data['i_sold']) ? (int)$data['i_sold'] : null;
    }
}
