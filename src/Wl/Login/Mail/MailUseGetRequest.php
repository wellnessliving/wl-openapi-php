<?php

namespace WlSdk\Wl\Login\Mail;

class MailUseGetRequest
{
    /**
     * The business for which the email address search is being performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The email address to check for.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
