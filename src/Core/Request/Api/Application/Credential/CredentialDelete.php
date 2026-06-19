<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

use WlSdk\WlSdkClient;

/**
 * Deletes the specified credential for the application.
 */
class CredentialDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes the specified credential for the application.
     *
     * Accepts a credential CID identifying the credential type (such as Google or Facebook), resolves
     * the corresponding credential for the current application, and removes it from the database.
     *
     * @return CredentialDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(CredentialDeleteRequest $request): CredentialDeleteResponse
    {
        return new CredentialDeleteResponse($this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $request->params(), 'DELETE'));
    }
}
