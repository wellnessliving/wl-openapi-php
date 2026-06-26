<?php

namespace WlSdk\Wl\Oauth;

class OauthTokenPostRequest
{
    /**
     * Application client id.
     *
     * @var string|null
     */
    public ?string $s_client_id = null;

    /**
     * Application client secret.
     *
     * @var string|null
     */
    public ?string $s_client_secret = null;

    /**
     * Randomly generated code required for query verification.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * Url link to redirect user to after token successfully generated.
     *
     * @var string|null
     */
    public ?string $url_redirect = null;

    public function params(): array
    {
        return array_filter(
            [
            's_client_id' => $this->s_client_id,
            's_client_secret' => $this->s_client_secret,
            's_code' => $this->s_code,
            'url_redirect' => $this->url_redirect,
            ],
            static fn ($v) => $v !== null
        );
    }
}
