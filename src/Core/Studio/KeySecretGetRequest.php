<?php

namespace WlSdk\Core\Studio;

class KeySecretGetRequest
{
    /**
     * The CSRF code from the client side.
     *
     * @var string|null
     */
    public ?string $s_csrf = null;

    /**
     * The session key.
     *
     * @var string|null
     */
    public ?string $s_key_session = null;

    /**
     * Origin for client requests.
     *
     * @var string|null
     */
    public ?string $url_origin = null;

    public function params(): array
    {
        return array_filter(
            [
            's_csrf' => $this->s_csrf,
            's_key_session' => $this->s_key_session,
            'url_origin' => $this->url_origin,
            ],
            static fn ($v) => $v !== null
        );
    }
}
