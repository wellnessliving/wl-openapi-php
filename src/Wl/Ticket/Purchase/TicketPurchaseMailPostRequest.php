<?php

namespace WlSdk\Wl\Ticket\Purchase;

class TicketPurchaseMailPostRequest
{
    /**
     * The key of the purchase of tickets.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /**
     * Email to send the tickets to instead of the email of the buyer.
     *
     * Empty to send the email to the buyer.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_purchase' => $this->k_purchase,
            'text_mail' => $this->text_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
