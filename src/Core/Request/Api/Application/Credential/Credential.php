<?php

namespace WlSdk\Core\Request\Api\Application\Credential;

use WlSdk\WlSdkClient;

/**
 * Returns the credential data for the application.
 */
class Credential
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the credential data for the application.
     *
     * Accepts a credential CID identifying the credential type, loads the credential stored for the current
     * application, and returns it as a JSON-encoded object containing only public fields.
     *
     * @return CredentialGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CredentialGetRequest $request): CredentialGetResponse
    {
        return new CredentialGetResponse($this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $request->params(), 'GET'));
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
