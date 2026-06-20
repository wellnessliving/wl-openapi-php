<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Claim;

class ClaimPostRequest
{
    /**
     * Key of the business within which the invitation was issued.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Secret token identifying the guest pass invitation to claim.
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
            static fn ($v) => $v !== null
        );
    }
}
