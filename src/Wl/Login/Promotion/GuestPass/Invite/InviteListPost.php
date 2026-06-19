<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

use WlSdk\WlSdkClient;

/**
 * Sends a guest pass invitation to a user.
 */
class InviteListPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends a guest pass invitation to a user.
     *
     * Creates a new invitation for the specified guest pass and sends a notification.
     * The guest can be identified by user key or by contact details when no account exists.
     *
     * @return InviteListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(InviteListPostRequest $request): InviteListPostResponse
    {
        return new InviteListPostResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Invite/InviteList.json', $request->params(), 'POST'));
    }
}
