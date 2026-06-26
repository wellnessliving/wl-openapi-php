<?php

namespace WlSdk\Social\Twitter\Login;

class LoginGetRequest
{
    /**
     * User's primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
