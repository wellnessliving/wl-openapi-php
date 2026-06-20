<?php

namespace WlSdk\Core\Passport\User\Email;

class EmailExistGetRequest
{
    /**
     * The email address.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_email' => $this->text_email,
            ],
            static fn ($v) => $v !== null
        );
    }
}
