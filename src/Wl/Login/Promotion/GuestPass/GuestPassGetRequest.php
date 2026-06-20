<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass;

class GuestPassGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            ],
            static fn ($v) => $v !== null
        );
    }
}
