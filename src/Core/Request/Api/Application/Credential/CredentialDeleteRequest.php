<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

class CredentialDeleteRequest
{
    /**
     * The CID of the credential.
     *
     * @var \WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract|null
     */
    public ?\WlSdk\Core\Request\Api\Application\Credential\CredentialAbstract $cid_credential = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_credential' => $this->cid_credential?->value,
            ],
            static fn($v) => $v !== null
        );
    }
}
