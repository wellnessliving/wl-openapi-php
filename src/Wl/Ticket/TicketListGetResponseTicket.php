<?php

namespace WlSdk\Wl\Ticket;

class TicketListGetResponseTicket
{
    /**
     * Time of the check-in, in the local time of the location, MySQL format. `null` if the ticket is not
     * checked in.
     *
     * @var string|null
     */
    public ?string $dtl_attend = null;

    /**
     * Time of the cancellation, in the local time of the location, MySQL format. `null` if the ticket is not
     * cancelled.
     *
     * @var string|null
     */
    public ?string $dtl_cancel = null;

    /**
     * Position of the ticket in the order, starting from 1.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * Number of tickets in the order, cancelled ones included.
     *
     * @var int|null
     */
    public ?int $i_order_size = null;

    /**
     * Whether the ticket is checked in. A cancelled ticket is never checked in.
     *
     * @var bool|null
     */
    public ?bool $is_attend = null;

    /**
     * Whether the ticket is cancelled: voided, or refunded with the seat returned.
     *
     * @var bool|null
     */
    public ?bool $is_cancel = null;

    /**
     * Order of the ticket, see {@link \WlSdk\Wl\Ticket\TicketListGetResponse::$a_order}.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * Key of the ticket, the one {@link \WlSdk\Wl\Ticket\TicketScan} takes.
     *
     * @var string|null
     */
    public ?string $k_ticket_item = null;

    /**
     * Key of the ticket type. Key of the ticket type.
     *
     * @var string|null
     */
    public ?string $k_ticket_option = null;

    /**
     * Number of the ticket: its short code in the format for displaying, for example `4829-1736`. Empty if the
     * ticket has no short code.
     *
     * @var string|null
     */
    public ?string $text_ticket_code = null;

    /**
     * Name of the ticket type.
     *
     * @var string|null
     */
    public ?string $text_type = null;

    public function __construct(array $data)
    {
        $this->dtl_attend = isset($data['dtl_attend']) ? (string)$data['dtl_attend'] : null;
        $this->dtl_cancel = isset($data['dtl_cancel']) ? (string)$data['dtl_cancel'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->i_order_size = isset($data['i_order_size']) ? (int)$data['i_order_size'] : null;
        $this->is_attend = isset($data['is_attend']) ? (bool)$data['is_attend'] : null;
        $this->is_cancel = isset($data['is_cancel']) ? (bool)$data['is_cancel'] : null;
        $this->k_purchase = isset($data['k_purchase']) ? (string)$data['k_purchase'] : null;
        $this->k_ticket_item = isset($data['k_ticket_item']) ? (string)$data['k_ticket_item'] : null;
        $this->k_ticket_option = isset($data['k_ticket_option']) ? (string)$data['k_ticket_option'] : null;
        $this->text_ticket_code = isset($data['text_ticket_code']) ? (string)$data['text_ticket_code'] : null;
        $this->text_type = isset($data['text_type']) ? (string)$data['text_type'] : null;
    }
}
