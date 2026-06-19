<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

use WlSdk\WlSdkClient;

/**
 * Saves the credential for the application.
 */
class CredentialPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the credential for the application.
     *
     * Accepts a credential CID and a JSON-encoded object with credential fields, validates the data,
     * and stores or replaces the credential for the current application.
     *
     * @return CredentialPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(CredentialPutRequest $request): CredentialPutResponse
    {
        return new CredentialPutResponse($this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $request->params(), 'PUT'));
    }
}
