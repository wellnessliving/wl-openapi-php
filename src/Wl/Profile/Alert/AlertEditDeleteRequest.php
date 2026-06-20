<?php

namespace WlSdk\Wl\Profile\Alert;

class AlertEditDeleteRequest
{
    /**
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login note key to edit or get info for.
     * Empty if new entry is being added.
     *
     * @var string|null
     */
    public ?string $k_login_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_note' => $this->k_login_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
