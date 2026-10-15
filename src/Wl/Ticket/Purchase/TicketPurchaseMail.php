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
     * @return TicketPurchaseMailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TicketPurchaseMailPostRequest $request): TicketPurchaseMailPostResponse
    {
        return new TicketPurchaseMailPostResponse($this->client->request('/Wl/Ticket/Purchase/TicketPurchaseMail.json', $request->params(), 'POST'));
    }
}
