<?php

namespace WlSdk\Wl\Ticket\Purchase;

use WlSdk\WlSdkClient;

/**
 * Sends the confirmation of the purchase with the tickets.
 */
class TicketPurchaseMail
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the confirmation of the purchase with the tickets.
     *
     * Checks the access to the purchase, finds the order of tickets of the purchase, and sends the email with the
     * tickets and their QR codes to the buyer, or to `text_mail` if it is given. The email is not sent if the
     * pattern
     * is turned off in the business, or if the buyer has turned it off in the notification settings and no address
     * is
     * given. The codes of the errors are listed in the description of the class.
     *
     * @return TicketPurchaseMailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TicketPurchaseMailPostRequest $request): TicketPurchaseMailPostResponse
    {
        return new TicketPurchaseMailPostResponse($this->client->request('/Wl/Ticket/Purchase/TicketPurchaseMail.json', $request->params(), 'POST'));
    }
}
