<?php

namespace WlSdk\Wl\Ticket;

use WlSdk\WlSdkClient;

/**
 * Sends the tickets of the purchase.
 */
class TicketMail
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the tickets of the purchase.
     *
     * Only a staff member with the store sell privilege, or a user who can access the profile of the client of the
     * order, may send. The email goes to `text_mail` when it is sent; otherwise, if the order has a client, to the
     * email of the account of the client; otherwise to the email of the order. After the request `text_mail` holds
     * the
     * address the tickets were sent to.
     *
     * The code of the exception tells the client what has happened:<ul>
     *   <li>`access`: nobody is signed in, or the user has neither the store sell privilege nor access to the
     * profile
     *     of the client of the order. For a user who cannot sell, this code is also returned when the purchase has
     * no
     *     tickets, so that they cannot learn which purchases have tickets.</li>
     *   <li>`order-nx`: the purchase has no order of tickets. Returned only to a user who can sell.</li>
     *   <li>`mail-invalid`: `text_mail` is not a valid email.</li>
     *   <li>`mail-nx`: no address was sent, and the order has no email to send to (no email of the client of the
     *     order, no email of the order).</li>
     * </ul>
     *
     * @return TicketMailPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TicketMailPostRequest $request): TicketMailPostResponse
    {
        return new TicketMailPostResponse($this->client->request('/Wl/Ticket/TicketMail.json', $request->params(), 'POST'));
    }
}
