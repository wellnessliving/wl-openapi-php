<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

class CredentialPutRequest
{
    /**
     * The CID of the credential.
     *
     * @var \WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract|null
     */
    public ?\WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract $cid_credential = null;

    /**
     * An array with the credential.
     *
     * @var string|null
     */
    public ?string $json_credential = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_credential' => $this->cid_credential?->value,
            'json_credential' => $this->json_credential,
            ],
            static fn($v) => $v !== null
        );
    }
}
