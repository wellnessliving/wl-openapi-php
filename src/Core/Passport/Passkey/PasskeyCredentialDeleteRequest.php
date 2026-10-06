<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyCredentialDeleteRequest
{
    /**
     * Key of the credential to revoke.
     *
     * Only used to revoke a credential.
     *
     * @var string|null
     */
    public ?string $k_passkey_credential = null;

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
            'k_passkey_credential' => $this->k_passkey_credential,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
