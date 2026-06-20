<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

class InviteListGetRequest
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

    public function params(): array
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
            ],
            static fn ($v) => $v !== null
        );
    }
}
