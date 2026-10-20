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
     * Staff members of the session, who lead it. Every item has the next structure:
     *
     * @var TicketListGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * Tickets of the session, cancelled ones included. Every item has the next structure:
     *
     * @var TicketListGetResponseTicket[]|null
     */
    public ?array $a_ticket = null;

    /**
     * Ticket types of the event, including the ones with nothing sold. Hidden types are listed only if a ticket of
     * the type is in the session. Every item has the next structure:
     *
     * @var TicketListGetResponseTicketOption[]|null
     */
    public ?array $a_ticket_option = null;

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
     * Whether the session has ended.
     *
     * @var bool|null
     */
    public ?bool $is_past = null;

    /**
     * Whether the current staff member can see the sales report. Money fields are always returned, the client
     * hides
     * them when this is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_sales_report = null;

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

    /**
     * Link to book the session directly. Empty: the link is not provided yet.
     *
     * @var string|null
     */
    public ?string $url_booking = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? new TicketListGetResponseLocation((array)$data['a_location']) : null;
        $this->a_order = isset($data['a_order']) ? array_map(static fn ($item) => new TicketListGetResponseOrder((array)$item), (array)$data['a_order']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new TicketListGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->a_ticket = isset($data['a_ticket']) ? array_map(static fn ($item) => new TicketListGetResponseTicket((array)$item), (array)$data['a_ticket']) : null;
        $this->a_ticket_option = isset($data['a_ticket_option']) ? array_map(static fn ($item) => new TicketListGetResponseTicketOption((array)$item), (array)$data['a_ticket_option']) : null;
        $this->dtl_end = isset($data['dtl_end']) ? (string)$data['dtl_end'] : null;
        $this->dtl_start = isset($data['dtl_start']) ? (string)$data['dtl_start'] : null;
        $this->i_attend = isset($data['i_attend']) ? (int)$data['i_attend'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_sold = isset($data['i_sold']) ? (int)$data['i_sold'] : null;
        $this->is_past = isset($data['is_past']) ? (bool)$data['is_past'] : null;
        $this->is_sales_report = isset($data['is_sales_report']) ? (bool)$data['is_sales_report'] : null;
        $this->is_sell = isset($data['is_sell']) ? (bool)$data['is_sell'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_booking = isset($data['url_booking']) ? (string)$data['url_booking'] : null;
    }
}
