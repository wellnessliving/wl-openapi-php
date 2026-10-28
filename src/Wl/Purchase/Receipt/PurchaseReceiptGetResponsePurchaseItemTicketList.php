<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponsePurchaseItemTicketList
{
    /**
     * The number of the ticket.
     *
     * @var string|null
     */
    public ?string $text_number = null;

    /**
     * The title of the event the ticket is for.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The URL of the page to print the ticket. The page works without a login.
     *
     * @var string|null
     */
    public ?string $url_print = null;

    public function __construct(array $data)
    {
        $this->text_number = isset($data['text_number']) ? (string)$data['text_number'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_print = isset($data['url_print']) ? (string)$data['url_print'] : null;
    }
}
