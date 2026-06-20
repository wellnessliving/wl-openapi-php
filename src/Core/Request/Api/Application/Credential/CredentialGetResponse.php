<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

/**
 * Response from GET
 */
class CredentialGetResponse
{
    /**
     * An array with the credential.
     *
     * @var string|null
     */
    public ?string $json_credential = null;

    public function __construct(array $data)
    {
        $this->json_credential = isset($data['json_credential']) ? (string)$data['json_credential'] : null;
    }
}
