<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseItemDataTickets
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
     * Ticket option name.
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
