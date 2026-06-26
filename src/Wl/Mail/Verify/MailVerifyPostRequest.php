<?php

namespace WlSdk\Wl\Mail\Verify;

class MailVerifyPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Email address.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_email' => $this->text_email,
            ],
            static fn ($v) => $v !== null
        );
    }
}
