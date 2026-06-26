<?php

namespace WlSdk\Wl\DoorAccess\Brivo\Invitation;

use WlSdk\WlSdkClient;

/**
 * Sets `is_redeem` to `true` if an invitation is redeemed, and to `false` otherwise.
 * Method retrieves an invitation status from database, whether it is not redeemed the invitation data is retrieved
 * from Brivo.
 * Method controls time of last update of the invitation's data and updates it if necessary(invitation's data exists
 * and outdated).
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
     * Sets `is_redeem` to `true` if an invitation is redeemed, and to `false` otherwise.
Method retrieves an invitation status from database, whether it is not redeemed the invitation data is retrieved from Brivo.
Method controls time of last update of the invitation's data and updates it if necessary(invitation's data exists and outdated).
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
     * This method is called to process request for Brivo mobile pass invitation for a client.
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
