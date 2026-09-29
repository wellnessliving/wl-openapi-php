<?php

namespace WlSdk\Core\Passport\Passkey;

/**
 * Response from GET
 */
class PasskeyRegisterGetResponse
{
    /**
     * JSON-encoded challenge and options to use when creating a new credential.
     *
     * Filled in when starting the ceremony.
     *
     * @var string|null
     */
    public ?string $json_options = null;

    public function __construct(array $data)
    {
        $this->json_options = isset($data['json_options']) ? (string)$data['json_options'] : null;
    }
}
