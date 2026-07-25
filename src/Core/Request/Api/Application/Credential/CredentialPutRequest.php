<?php

namespace WlSdk\Core\Request\Api\Application\Credential;

class CredentialPutRequest
{
    /**
     * The CID of the credential.
     *
     * @var int|null
     * @see \WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract
     */
    public ?int $cid_credential = null;

    /**
     * An array with the credential.
     *
     * @var string|null
     */
    public ?string $json_credential = '[]';

    public function params(): array
    {
        return array_filter(
            [
            'cid_credential' => $this->cid_credential,
            'json_credential' => $this->json_credential,
            ],
            static fn ($v) => $v !== null
        );
    }
}
