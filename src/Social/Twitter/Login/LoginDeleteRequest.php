<?php

namespace WlSdk\Social\Twitter\Login;

class LoginDeleteRequest
{
    /**
     * User ID in Twitter.
     *
     * @var string|null
     */
    public ?string $i_twitter = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_twitter' => $this->i_twitter,
            ],
            static fn ($v) => $v !== null
        );
    }
}
