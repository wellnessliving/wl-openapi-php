<?php

namespace WlSdk\Wl\Ticket;

/**
 * Response from POST
 */
class TicketMailPostResponse
{
    /**
     * Email to send the tickets to.
     *
     * Empty to send them to the email of the order, or of the client of the order. After the request it holds the
     * address the tickets were sent to.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    public function __construct(array $data)
    {
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
    }
}
