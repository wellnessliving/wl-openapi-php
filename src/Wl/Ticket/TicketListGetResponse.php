<?php

namespace WlSdk\Wl\Ticket;

/**
 * Response from GET
 */
class TicketListGetResponse
{
    /**
     * Location of the session. Has the next structure:
     *
     * @var TicketListGetResponseLocation|null
     */
    public ?TicketListGetResponseLocation $a_location = null;

    /**
     * Orders of the session, from the most recent purchase to the oldest one. Every item has the next structure:
     *
     * @var TicketListGetResponseOrder[]|null
     */
    public ?array $a_order = null;

    /**
     * Tickets of the session, cancelled ones included. Every item has the next structure:
     *
     * @var TicketListGetResponseTicket[]|null
     */
    public ?array $a_ticket = null;

    /**
     * End of the session, in the local time of the location, MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_end = null;

    /**
     * Start of the session, in the local time of the location, MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_start = null;

    /**
     * Number of tickets of the session that are checked in.
     *
     * @var int|null
     */
    public ?int $i_attend = null;

    /**
     * Number of tickets that can be sold for the event.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Number of tickets sold for the session, not counting cancelled ones.
     *
     * Counts tickets, not buyers.
     *
     * @var int|null
     */
    public ?int $i_sold = null;

    /**
     * Whether tickets of the session can still be sold: there are free seats, and the session has not ended.
     *
     * @var bool|null
     */
    public ?bool $is_sell = null;

    /**
     * Key of the currency of all amounts of the answer.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Total paid for the tickets of the session, net of refunds. Decimal string, in the currency
     * {@link \WlSdk\Wl\Ticket\TicketListGetResponse::$k_currency}.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    /**
     * Name of the event, with no date in it.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? new TicketListGetResponseLocation((array)$data['a_location']) : null;
        $this->a_order = isset($data['a_order']) ? array_map(static fn ($item) => new TicketListGetResponseOrder((array)$item), (array)$data['a_order']) : null;
        $this->a_ticket = isset($data['a_ticket']) ? array_map(static fn ($item) => new TicketListGetResponseTicket((array)$item), (array)$data['a_ticket']) : null;
        $this->dtl_end = isset($data['dtl_end']) ? (string)$data['dtl_end'] : null;
        $this->dtl_start = isset($data['dtl_start']) ? (string)$data['dtl_start'] : null;
        $this->i_attend = isset($data['i_attend']) ? (int)$data['i_attend'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_sold = isset($data['i_sold']) ? (int)$data['i_sold'] : null;
        $this->is_sell = isset($data['is_sell']) ? (bool)$data['is_sell'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
