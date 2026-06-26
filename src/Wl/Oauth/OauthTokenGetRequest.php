<?php

namespace WlSdk\Wl\Oauth;

class OauthTokenGetRequest
{
    /**
     * Generated refresh token.
     *
     * @var string|null
     */
    public ?string $s_token_refresh = null;

    public function params(): array
    {
        return array_filter(
            [
            's_token_refresh' => $this->s_token_refresh,
            ],
            static fn ($v) => $v !== null
        );
    }
}
