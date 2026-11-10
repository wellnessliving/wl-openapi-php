<?php

namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewPostResponseSessionResultClassTickets
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
     * One ticket price with the early bird applied, taken from the settings of the event. `null` if the event
     * has no early bird. The end of the early bird period is not taken into account, so the client decides
     * whether to apply this price. See `a_options`.
     *
     * @var string|null
     */
    public ?string $m_price_early = null;

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
        $this->m_price_early = isset($data['m_price_early']) ? (string)$data['m_price_early'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
