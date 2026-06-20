<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

use WlSdk\WlSdkClient;

/**
 * Sends a reminder notification for a guest pass invitation.
 */
class Invite
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends a reminder notification for a guest pass invitation.
     *
     * Resends the invitation notification to the guest using the reminder email or SMS template.
     *
     * @return InvitePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(InvitePutRequest $request): InvitePutResponse
    {
        return new InvitePutResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Invite/Invite.json', $request->params(), 'PUT'));
    }

    /**
     * Revokes a guest pass invitation.
     *
     * Marks the invitation as rejected and sends an expiry notification to the guest.
     *
     * @return InviteDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(InviteDeleteRequest $request): InviteDeleteResponse
    {
        return new InviteDeleteResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Invite/Invite.json', $request->params(), 'DELETE'));
    }
}
