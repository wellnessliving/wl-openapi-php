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

    public function params(): array
    {
        return array_filter(
            [
            'k_passkey_credential' => $this->k_passkey_credential,
            ],
            static fn ($v) => $v !== null
        );
    }
}
