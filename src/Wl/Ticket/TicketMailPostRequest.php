<?php

namespace WlSdk\Wl\Ticket;

class TicketMailPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the purchase the tickets were bought with.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * Email to send the tickets to.
     *
     * Empty to send them to the email of the order, or of the client of the order. After the request it holds the
     * address the tickets were sent to.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_purchase' => $this->k_purchase,
            'text_mail' => $this->text_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
