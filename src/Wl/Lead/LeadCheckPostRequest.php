<?php

namespace WlSdk\Wl\Lead;

class LeadCheckPostRequest
{
    /**
     * The key of business to which the new user must be captured.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User email.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_mail' => $this->s_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
