<?php

namespace WlSdk\Wl\Oauth;

/**
 * Response from POST
 */
class OauthTokenPostResponse
{
    /**
     * Generated live token.
     *
     * @var string|null
     */
    public ?string $s_token_access = null;

    /**
     * Generated refresh token.
     *
     * @var string|null
     */
    public ?string $s_token_refresh = null;

    public function __construct(array $data)
    {
        $this->s_token_access = isset($data['s_token_access']) ? (string)$data['s_token_access'] : null;
        $this->s_token_refresh = isset($data['s_token_refresh']) ? (string)$data['s_token_refresh'] : null;
    }
}
