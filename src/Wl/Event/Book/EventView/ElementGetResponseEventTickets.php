<?php

namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseEventTickets
{
    /**
     * Globally unique identifier of the ticket option.
     *
     * @var string|null
     */
    public ?string $k_ticket_option = null;

    /**
     * One ticket price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * One ticket price with the early bird applied, taken from the settings of the event. `null` if the
     * event has no early bird. It is returned even when the early bird period is over: the client decides
     * whether to apply it, see `dt_early` and `s_timezone_location` of the schedule.
     *
     * @var float|null
     */
    public ?float $m_price_early = null;

    /**
     * Ticket option name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_ticket_option = isset($data['k_ticket_option']) ? (string)$data['k_ticket_option'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_price_early = isset($data['m_price_early']) ? (float)$data['m_price_early'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
