<?php

namespace WlSdk\Wl\Ticket;

use WlSdk\WlSdkClient;

/**
 * Checks in the tickets.
 */
class TicketScanList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks in the tickets.
     *
     * Validates the business and the access of the current user to it once for the whole call, then checks in
     * every
     * ticket on its own and loads the counters of the session once, after all of them.
     *
     * @return TicketScanListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TicketScanListPostRequest $request): TicketScanListPostResponse
    {
        return new TicketScanListPostResponse($this->client->request('/Wl/Ticket/TicketScanList.json', $request->params(), 'POST'));
    }
}
