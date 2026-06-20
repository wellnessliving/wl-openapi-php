<?php

namespace WlSdk\Social\Apple\Login;

class AppleLoginPostRequest
{
    /**
     * The application ID.
     *
     * @var string|null
     */
    public ?string $text_application = null;

    /**
     * The authorization code.
     *
     * @var string|null
     */
    public ?string $text_authorization = null;

    /**
     * User's first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * User's last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    public function params(): array
    {
        return array_filter(
            [
            'text_application' => $this->text_application,
            'text_authorization' => $this->text_authorization,
            'text_name_first' => $this->text_name_first,
            'text_name_last' => $this->text_name_last,
            ],
            static fn ($v) => $v !== null
        );
    }
}
