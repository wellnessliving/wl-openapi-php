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

    public function __construct(array $data)
    {
        $this->a_credential = isset($data['a_credential']) ? array_map(static fn ($item) => new PasskeyCredentialGetResponseCredential((array)$item), (array)$data['a_credential']) : null;
    }
}
