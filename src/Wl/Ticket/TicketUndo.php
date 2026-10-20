<?php

namespace WlSdk\Wl\Ticket;

use WlSdk\WlSdkClient;

/**
 * Undoes the check-in of the ticket.
 */
class TicketUndo
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Undoes the check-in of the ticket.
     *
     * Validates the business and the access of the current user to it, finds the ticket, checks it against the
     * session sent by the client, and returns its visit from attended to booked. Takes the same critical section
     * as
     * {@link \WlSdk\Wl\Ticket\TicketScan}, so a check-in and an undo of the same ticket never run at the same
     * time.
     *
     * @return TicketUndoPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TicketUndoPostRequest $request): TicketUndoPostResponse
    {
        return new TicketUndoPostResponse($this->client->request('/Wl/Ticket/TicketUndo.json', $request->params(), 'POST'));
    }
}
