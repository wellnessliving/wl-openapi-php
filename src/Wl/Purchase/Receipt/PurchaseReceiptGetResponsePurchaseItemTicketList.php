<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponsePurchaseItemTicketList
{
    /**
     * The title of the event the ticket is for.
     *
     * @var string|null
     */
    public ?string $text_event_title = null;

    /**
     * The number of the ticket.
     *
     * @var string|null
     */
    public ?string $text_number = null;

    /**
     * The title of the ticket type.
     *
     * @var string|null
     */
    public ?string $text_ticket_title = null;

    /**
     * The URL to download the PDF file with this ticket. The file works without a login. It does not expire
     * with {@link \WlSdk\Wl\Purchase\Receipt\PurchaseReceipt}.
     *
     * @var string|null
     */
    public ?string $url_download = null;

    /**
     * The URL of the page to print the ticket. The page works without a login.
     *
     * @var string|null
     */
    public ?string $url_print = null;

    public function __construct(array $data)
    {
        $this->text_event_title = isset($data['text_event_title']) ? (string)$data['text_event_title'] : null;
        $this->text_number = isset($data['text_number']) ? (string)$data['text_number'] : null;
        $this->text_ticket_title = isset($data['text_ticket_title']) ? (string)$data['text_ticket_title'] : null;
        $this->url_download = isset($data['url_download']) ? (string)$data['url_download'] : null;
        $this->url_print = isset($data['url_print']) ? (string)$data['url_print'] : null;
    }
}
