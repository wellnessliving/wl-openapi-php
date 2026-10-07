<?php

namespace WlSdk\Wl\Ticket;

/**
 * Response from POST
 */
class TicketScanPostResponse
{
    /**
     * Time when the ticket has been checked in, in UTC and MySQL format.
     *
     * `null` if the ticket was not checked in.
     *
     * @var string|null
     */
    public ?string $dtu_attend = null;

    /**
     * Time when the visit of the ticket has been cancelled, in UTC and MySQL format.
     *
     * `null` if the ticket was not cancelled.
     *
     * @var string|null
     */
    public ?string $dtu_cancel = null;

    /**
     * End of the session the ticket is for, in UTC and MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_session_end = null;

    /**
     * Start of the session the ticket is for, in UTC and MySQL format.
     *
     * Equals {@link \WlSdk\Wl\Ticket\TicketScan} when the ticket is for the session the client has sent.
     *
     * @var string|null
     */
    public ?string $dtu_session_start = null;

    /**
     * Number of the tickets already checked in for the session, including this one.
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

    /**
     * Key of the class period the session of the ticket belongs to.
     *
     * Differs from {@link \WlSdk\Wl\Ticket\TicketScan} only when the ticket is for another session.
     *
     * @var string|null
     */
    public ?string $k_class_period_ticket = null;

    /**
     * Key of the ticket.
     *
     * @var string|null
     */
    public ?string $k_ticket_item = null;

    /**
     * Key of the visit booked with the ticket.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Short code of the ticket in the format for displaying, for example `4829-1736`.
     *
     * Empty if the ticket has no short code.
     *
     * @var string|null
     */
    public ?string $text_ticket_code = null;

    /**
     * Name of the event the ticket is for.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->dtu_attend = isset($data['dtu_attend']) ? (string)$data['dtu_attend'] : null;
        $this->dtu_cancel = isset($data['dtu_cancel']) ? (string)$data['dtu_cancel'] : null;
        $this->dtu_session_end = isset($data['dtu_session_end']) ? (string)$data['dtu_session_end'] : null;
        $this->dtu_session_start = isset($data['dtu_session_start']) ? (string)$data['dtu_session_start'] : null;
        $this->i_attend = isset($data['i_attend']) ? (int)$data['i_attend'] : null;
        $this->i_sold = isset($data['i_sold']) ? (int)$data['i_sold'] : null;
        $this->k_class_period_ticket = isset($data['k_class_period_ticket']) ? (string)$data['k_class_period_ticket'] : null;
        $this->k_ticket_item = isset($data['k_ticket_item']) ? (string)$data['k_ticket_item'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->text_ticket_code = isset($data['text_ticket_code']) ? (string)$data['text_ticket_code'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
