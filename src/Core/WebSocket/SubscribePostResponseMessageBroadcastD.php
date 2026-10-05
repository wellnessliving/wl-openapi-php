<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastD
{
    /**
     * Time when the ticket has been checked in, in UTC and MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_attend = null;

    /**
     * Number of the tickets checked in for the session, including this one.
     *
     * @var int|null
     */
    public ?int $i_attend = null;

    /**
     * Number of the tickets sold for the session.
     *
     * @var int|null
     */
    public ?int $i_sold = null;

    /**
     * Status of the visit of the ticket after the check-in. One of {@link \WlSdk\Wl\Visit\VisitSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * Key of the ticket that has been checked in.
     *
     * @var string|null
     */
    public ?string $k_ticket_item = null;

    public function __construct(array $data)
    {
        $this->dtu_attend = isset($data['dtu_attend']) ? (string)$data['dtu_attend'] : null;
        $this->i_attend = isset($data['i_attend']) ? (int)$data['i_attend'] : null;
        $this->i_sold = isset($data['i_sold']) ? (int)$data['i_sold'] : null;
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->k_ticket_item = isset($data['k_ticket_item']) ? (string)$data['k_ticket_item'] : null;
    }
}
