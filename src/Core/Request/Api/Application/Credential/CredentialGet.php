<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

use WlSdk\WlSdkClient;

/**
 * Returns the credential data for the application.
 */
class CredentialGet
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
}
