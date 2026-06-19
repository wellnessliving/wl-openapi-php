<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

class InviteDeleteRequest
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

    public function params(): array
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
