<?php
namespace WlSdk\Core\Request\Api\Application\Credential;

use WlSdk\WlSdkClient;

/**
 * Returns the credential data for the application.
 */
class CredentialApi
{
    /**
     * The CID of the credential.
     *
     * @var int|null
     */
    public ?int $cid_credential = null;

    /**
     * An array with the credential.
     *
     * @var string|null
     */
    public ?string $json_credential = null;

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
     * @return CredentialApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CredentialApiGetResponse
    {
        return new CredentialApiGetResponse($this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $this->params(), 'GET'));
    }

    /**
     * Saves the credential for the application.
     *
     * Accepts a credential CID and a JSON-encoded object with credential fields, validates the data,
     * and stores or replaces the credential for the current application.
     *
     * @return CredentialApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): CredentialApiPutResponse
    {
        return new CredentialApiPutResponse($this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $this->params(), 'PUT'));
    }

    /**
     * Deletes the specified credential for the application.
     *
     * Accepts a credential CID identifying the credential type (such as Google or Facebook), resolves
     * the corresponding credential for the current application, and removes it from the database.
     *
     * @return CredentialApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): CredentialApiDeleteResponse
    {
        return new CredentialApiDeleteResponse($this->client->request('/Core/Request/Api/Application/Credential/Credential.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'cid_credential' => $this->cid_credential,
            'json_credential' => $this->json_credential,
            ],
            static fn($v) => $v !== null
        );
    }
}
