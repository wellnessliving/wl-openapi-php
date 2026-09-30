<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyCredentialGetRequest
{
    /**
     * Key of the user whose passkey credentials to manage. `'0'` or empty string to use the
     * currently signed-in user.
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
