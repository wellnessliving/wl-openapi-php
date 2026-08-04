<?php

namespace WlSdk\Core\Passport\Passkey;

/**
 * Response from GET
 */
class PasskeyCredentialGetResponse
{
    /**
     * List of the signed-in user's registered passkey credentials. Structure of each element:
     *
     * @var PasskeyCredentialGetResponseCredential|null
     */
    public ?PasskeyCredentialGetResponseCredential $a_credential = null;

    public function __construct(array $data)
    {
        $this->a_credential = isset($data['a_credential']) ? new PasskeyCredentialGetResponseCredential((array)$data['a_credential']) : null;
    }
}
