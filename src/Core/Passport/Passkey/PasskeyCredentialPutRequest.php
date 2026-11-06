<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyCredentialPutRequest
{
    /**
     * JSON-encoded structure with any additional information required by the project-specific
     * passkey configuration class, for example `k_business` in `Wl`.
     *
     * Needed to list, to rename and to revoke passkeys, the own ones included, because the project configuration
     * decides who may
     * manage them; empty only if the project configuration requires no additional information.
     *
     * @var string|null
     */
    public ?string $json_context = null;

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
            'json_context' => $this->json_context,
            'k_passkey_credential' => $this->k_passkey_credential,
            'text_device' => $this->text_device,
            ],
            static fn ($v) => $v !== null
        );
    }
}
