<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

use WlSdk\WlSdkClient;

/**
 * Returns a list of guest pass invitations for the given membership or user.
 */
class InviteListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of guest pass invitations for the given membership or user.
     *
     * Supports filtering by host membership, guest user, host user, date range, and whether expired
     *  or revoked invitations are included.
     *
     * @return InviteListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InviteListGetRequest $request): InviteListGetResponse
    {
        return new InviteListGetResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Invite/InviteList.json', $request->params(), 'GET'));
    }
}
