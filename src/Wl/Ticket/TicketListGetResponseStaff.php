<?php

namespace WlSdk\Wl\Ticket;

class TicketListGetResponseStaff
{
    /**
     * Full name of the staff member.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Key of the staff member.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
