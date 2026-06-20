<?php

namespace WlSdk\Wl\Business\AuthorizePartner;

class AuthorizePartnerGetRequest
{
    /**
     * Determines whether the user will be granted access or if access will be revoked.
     * If `true`, access will be granted. If `false`, access will be revoked.
     * Revoking access is a scheduled task set to be run within the next 15 minutes.
     *
     * @var bool|null
     */
    public ?bool $is_grant = null;

    /**
     * The key of the franchisee location to enter.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user who will be granted access.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_grant' => $this->is_grant,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
