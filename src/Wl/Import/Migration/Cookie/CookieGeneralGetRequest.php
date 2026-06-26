<?php

namespace WlSdk\Wl\Import\Migration\Cookie;

class CookieGeneralGetRequest
{
    /**
     * Key of the business from Mindbody.
     * Note: This key is used to go to the backend page of the business in Mindbody.
     * Key of the business can be a negative number.
     *
     * @var int|null
     */
    public ?int $k_studio = null;

    /**
     * User login for authorization for Mindbody.
     *
     * @var string|null
     */
    public ?string $text_login = null;

    /**
     * User password for authorization for Mindbody.
     *
     * @var string|null
     */
    public ?string $text_password = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_studio' => $this->k_studio,
            'text_login' => $this->text_login,
            'text_password' => $this->text_password,
            ],
            static fn ($v) => $v !== null
        );
    }
}
