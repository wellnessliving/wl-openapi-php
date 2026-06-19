<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

use WlSdk\WlSdkClient;

/**
 * Sends a reminder notification for a guest pass invitation.
 */
class InviteApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Secret of the invitation.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

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
     * @return InviteApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): InviteApiPutResponse
    {
        return new InviteApiPutResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Invite/Invite.json', $this->params(), 'PUT'));
    }

    /**
     * Revokes a guest pass invitation.
     *
     * Marks the invitation as rejected and sends an expiry notification to the guest.
     *
     * @return InviteApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): InviteApiDeleteResponse
    {
        return new InviteApiDeleteResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Invite/Invite.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_secret' => $this->s_secret,
            ],
            static fn($v) => $v !== null
        );
    }
}
