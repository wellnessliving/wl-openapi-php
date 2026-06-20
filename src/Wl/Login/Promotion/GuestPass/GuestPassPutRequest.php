<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass;

class GuestPassPutRequest
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

    /**
     * Number of guest passes remaining for the current period.
     *
     * @var int|null
     */
    public ?int $i_adjust = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'i_adjust' => $this->i_adjust,
            ],
            static fn ($v) => $v !== null
        );
    }
}
