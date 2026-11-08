<?php

namespace WlSdk\Core\Passport\Passkey;

/**
 * Response from GET
 */
class PasskeyCredentialGetResponse
{
    /**
     * List of the signed-in user's registered passkey credentials.
     *
     * @var PasskeyCredentialGetResponseCredential[]|null
     */
    public ?array $a_credential = null;

    /**
     * Relying Party ID of the passkeys, the `rpId` the `WebAuthn` signal methods need.
     *
     * Filled when listing the credentials. The same for every credential and for every client of the environment.
     *
     * @var string|null
     */
    public ?string $s_rp_id = null;

    public function __construct(array $data)
    {
        $this->a_credential = isset($data['a_credential']) ? array_map(static fn ($item) => new PasskeyCredentialGetResponseCredential((array)$item), (array)$data['a_credential']) : null;
        $this->s_rp_id = isset($data['s_rp_id']) ? (string)$data['s_rp_id'] : null;
    }
}
