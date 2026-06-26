<?php

namespace WlSdk\Social\Facebook\Login;

class LoginBindPostRequest
{
    /**
     * User key. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Facebook token.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    public function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            's_token' => $this->s_token,
            ],
            static fn ($v) => $v !== null
        );
    }
}
