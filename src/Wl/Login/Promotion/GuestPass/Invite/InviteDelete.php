<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

use WlSdk\WlSdkClient;

/**
 * Revokes a guest pass invitation.
 */
class InviteDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
