<?php

namespace WlSdk\Wl\Ticket;

use WlSdk\WlSdkClient;

/**
 * Checks in the ticket.
 */
class TicketScan
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks in the ticket.
     *
     * Validates the business and the access of the current user to it, finds the ticket, checks it against the
     * session sent by the client, and marks its visit as attended.
     *
     * @return TicketScanPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TicketScanPostRequest $request): TicketScanPostResponse
    {
        return new TicketScanPostResponse($this->client->request('/Wl/Ticket/TicketScan.json', $request->params(), 'POST'));
    }
}
