<?php
namespace WlSdk\Core\Request\Api;

use WlSdk\WlSdkClient;

/**
 * Gets a secret key for signing.
 */
class KeySecret
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a secret key for signing.
     *
     * Accepts a CSRF code, a session key, and the client origin URL, validates the session key against
     * the current application, and returns a secret key that the client uses to sign subsequent CORS requests.
     * This endpoint must not be called directly from a browser.
     *
     * @return KeySecretGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(KeySecretGetRequest $request): KeySecretGetResponse
    {
        return new KeySecretGetResponse($this->client->request('/Core/Request/Api/KeySecret.json', $request->params(), 'GET'));
    }
}
