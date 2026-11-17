<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetResponsePurchaseDetailTicketEvent
{
    /**
     * The key of the instance of the event.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The title of the event.
     *
     * @var string|null
     */
    public ?string $text_event_title = null;

    /**
     * The URL to download the PDF file with all the tickets of the event. The file works without a login.
     *
     * @var string|null
     */
    public ?string $url_download = null;

    /**
     * The image of a QR code, as a `data:` URI of a PNG file. A phone that scans the code adds all the tickets
     * of the event to its own wallet: Apple Wallet on an `iPhone`, Google Wallet on any other device. It is
     * empty while one of the wallets is not set up, because a phone of the wallet that is off would get an
     * error.
     *
     * @var string|null
     */
    public ?string $url_phone = null;

    /**
     * The URL of the page to print all the tickets of the event. The page works without a login.
     *
     * @var string|null
     */
    public ?string $url_print = null;

    /**
     * The link that adds all the tickets of the event to Apple Wallet at once. It is empty if Apple Wallet is
     * not set up.
     *
     * @var string|null
     */
    public ?string $url_wallet_apple = null;

    /**
     * The link that adds all the tickets of the event to Google Wallet at once. It is empty if Google Wallet
     * is not set up.
     *
     * @var string|null
     */
    public ?string $url_wallet_google = null;

    public function __construct(array $data)
    {
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->text_event_title = isset($data['text_event_title']) ? (string)$data['text_event_title'] : null;
        $this->url_download = isset($data['url_download']) ? (string)$data['url_download'] : null;
        $this->url_phone = isset($data['url_phone']) ? (string)$data['url_phone'] : null;
        $this->url_print = isset($data['url_print']) ? (string)$data['url_print'] : null;
        $this->url_wallet_apple = isset($data['url_wallet_apple']) ? (string)$data['url_wallet_apple'] : null;
        $this->url_wallet_google = isset($data['url_wallet_google']) ? (string)$data['url_wallet_google'] : null;
    }
}
