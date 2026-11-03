<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyCredentialPutRequest
{
    /**
     * Key of the credential to revoke or to rename.
     *
     * Only used to revoke or to rename a credential.
     *
     * @var string|null
     */
    public ?string $k_passkey_credential = null;

    /**
     * New name of the credential, 1 to 50 characters, without the spaces at the beginning and at the end.
     *
     * Only used to rename a credential. It is saved as it is entered, even if another passkey of the user has the
     * same name.
     *
     * @var string|null
     */
    public ?string $text_device = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_passkey_credential' => $this->k_passkey_credential,
            'text_device' => $this->text_device,
            ],
            static fn ($v) => $v !== null
        );
    }
}
