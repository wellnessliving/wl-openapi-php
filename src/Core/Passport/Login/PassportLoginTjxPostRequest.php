<?php

namespace WlSdk\Core\Passport\Login;

class PassportLoginTjxPostRequest
{
    /**
     * Authorisation code.
     *
     * @var string|null
     */
    public ?string $text_authorisation = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_authorisation' => $this->text_authorisation,
            ],
            static fn ($v) => $v !== null
        );
    }
}
