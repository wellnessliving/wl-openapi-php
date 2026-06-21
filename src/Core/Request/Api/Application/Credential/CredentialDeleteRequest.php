<?php

namespace WlSdk\Core\Request\Api\Application\Credential;

class CredentialDeleteRequest
{
    /**
     * The CID of the credential.
     *
     * @var int|null
     * @see \WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract
     */
    public ?int $cid_credential = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_credential' => $this->cid_credential,
            ],
            static fn ($v) => $v !== null
        );
    }
}
