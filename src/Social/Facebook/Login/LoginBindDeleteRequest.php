<?php

namespace WlSdk\Social\Facebook\Login;

class LoginBindDeleteRequest
{
    /**
     * User ID in Facebook.
     *
     * @var string|null
     */
    public ?string $i_facebook = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_facebook' => $this->i_facebook,
            ],
            static fn ($v) => $v !== null
        );
    }
}
