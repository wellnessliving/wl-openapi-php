<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

class InviteListPostRequest
{
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
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_guest = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'uid_guest' => $this->uid_guest,
            'a_guest' => $this->a_guest,
            ],
            static fn ($v) => $v !== null
        );
    }
}
