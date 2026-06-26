<?php

namespace WlSdk\Wl\Mail\Domain;

class DomainVerifyPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Domain name.
     *
     * @var string|null
     */
    public ?string $text_domain = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_domain' => $this->text_domain,
            ],
            static fn ($v) => $v !== null
        );
    }
}
