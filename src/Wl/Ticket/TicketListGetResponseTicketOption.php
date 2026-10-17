<?php

namespace WlSdk\Wl\Ticket;

class TicketListGetResponseTicketOption
{
    /**
     * Key of the ticket type.
     *
     * @var string|null
     */
    public ?string $k_ticket_option = null;

    /**
     * Price of one ticket of the type, with the currency {@link
     * \WlSdk\Wl\Ticket\TicketListGetResponse::$k_currency}. Decimal string.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Name of the ticket type.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_ticket_option = isset($data['k_ticket_option']) ? (string)$data['k_ticket_option'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
