<?php

namespace WlSdk\Social\Twitter\Login;

class LoginPostRequest
{
    /**
     * User ID in Twitter.
     *
     * @var string|null
     */
    public ?string $i_twitter = null;

    /**
     * Twitter secret key.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * Twitter token.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_twitter' => $this->i_twitter,
            's_secret' => $this->s_secret,
            's_token' => $this->s_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
