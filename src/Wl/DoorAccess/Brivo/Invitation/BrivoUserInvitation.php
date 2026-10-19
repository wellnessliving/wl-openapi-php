<?php

namespace WlSdk\Wl\DoorAccess\Brivo\Invitation;

use WlSdk\WlSdkClient;

/**
 * Returns the redemption status of the Brivo mobile pass invitation.
 */
class BrivoUserInvitation
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the redemption status of the Brivo mobile pass invitation.
     *
     * Sets {@link \WlSdk\Wl\DoorAccess\Brivo\Invitation\BrivoUserInvitationGetResponse::$is_redeem} to `true` if
     * an invitation is redeemed,
     * and to `false` otherwise. Retrieves an invitation status from the database; when it is not
     * redeemed, the invitation data is retrieved from Brivo. Controls the time of the last update
     * of the invitation data and updates it if necessary.
     *
     * @return BrivoUserInvitationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BrivoUserInvitationGetRequest $request): BrivoUserInvitationGetResponse
    {
        return new BrivoUserInvitationGetResponse($this->client->request('/Wl/DoorAccess/Brivo/Invitation/BrivoUserInvitation.json', $request->params(), 'GET'));
    }

    /**
     * Sends a Brivo mobile pass invitation to a client.
     *
     * Processes a request for Brivo mobile pass invitation for a client. If the invitation
     * has not been redeemed, schedules a task to send it.
     *
     * @return BrivoUserInvitationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BrivoUserInvitationPostRequest $request): BrivoUserInvitationPostResponse
    {
        return new BrivoUserInvitationPostResponse($this->client->request('/Wl/DoorAccess/Brivo/Invitation/BrivoUserInvitation.json', $request->params(), 'POST'));
    }
}
