<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

use WlSdk\WlSdkClient;

/**
 * Returns a list of guest pass invitations for the given membership or user.
 */
class InviteListApi
{
    /**
     * End of the guest pass activity period.
     * Used to filter invitations whose activity moment is on or before this local date.
     * 
     * `null` to not filter by period end.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start of the guest pass activity period.
     * Used to filter invitations whose activity moment is on or after this local date.
     * 
     * `null` to not filter by period start.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Whether to include invitations that have already expired or were revoked.
     *
     * @var bool|null
     */
    public ?bool $is_include_expire = null;

    /**
     * Key of the business within which guest pass invitations are managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the login promotion which provides the guest pass invitation.
     * 
     * &gt; * Used for `GET` to get list of initial invitations for the specific login promotion.
     * &gt; * Used for `POST` to send invitation to the specific user for the specific login promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Key of the invited user.
     * 
     * &gt; * Used for `GET` to get list of incoming invitations for the specific user.
     * &gt; * Used for `POST` to send invitation to the specific user.
     *
     * @var string|null
     */
    public ?string $uid_guest = null;

    /**
     * Key of the host user who sent the invitation.
     * 
     * &gt; Used only for `GET` request to get list of outgoing invitations from the specific user.
     *
     * @var string|null
     */
    public ?string $uid_host = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_guest = null;

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
     * @return InviteListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): InviteListApiGetResponse
    {
        return new InviteListApiGetResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Invite/InviteList.json', $this->params(), 'GET'));
    }

    /**
     * Sends a guest pass invitation to a user.
     *
     * Creates a new invitation for the specified guest pass and sends a notification.
     * The guest can be identified by user key or by contact details when no account exists.
     *
     * @return InviteListApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): InviteListApiPostResponse
    {
        return new InviteListApiPostResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Invite/InviteList.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'is_include_expire' => $this->is_include_expire,
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'uid_guest' => $this->uid_guest,
            'uid_host' => $this->uid_host,
            'a_guest' => $this->a_guest,
            ],
            static fn($v) => $v !== null
        );
    }
}
