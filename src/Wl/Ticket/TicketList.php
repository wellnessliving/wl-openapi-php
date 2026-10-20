<?php

namespace WlSdk\Wl\Ticket;

use WlSdk\WlSdkClient;

/**
 * Returns tickets and orders of the session.
 */
class TicketList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns tickets and orders of the session.
     *
     * Returns every ticket of the session, cancelled ones included, the orders they belong to, the counters of the
     * session, and the data needed to show the session: its name, location, start and end.
     * Requires access of the current staff member to the business.
     *
     * @return TicketListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TicketListGetRequest $request): TicketListGetResponse
    {
        return new TicketListGetResponse($this->client->request('/Wl/Ticket/TicketList.json', $request->params(), 'GET'));
    }
}
