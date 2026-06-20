<?php

namespace WlSdk\Wl\Business\Claim;

class BusinessClaimPostRequest
{
    /**
     * The key of the business to be verified.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location to be verified.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user who verified the business.
     *
     * @var string|null
     */
    public ?string $uid_verified = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid_verified' => $this->uid_verified,
            ],
            static fn ($v) => $v !== null
        );
    }
}
