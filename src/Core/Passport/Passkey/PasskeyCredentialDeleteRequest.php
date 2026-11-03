<?php

namespace WlSdk\Core\Passport\Passkey;

class PasskeyCredentialDeleteRequest
{
    /**
     * JSON-encoded structure with any additional information required by the project-specific
     * passkey configuration class, for example `k_business` in `Wl`.
     *
     * Needed only to manage passkeys of a user other than the signed-in one; empty if no additional
     * information is required.
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
            'json_context' => $this->json_context,
            'k_passkey_credential' => $this->k_passkey_credential,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
