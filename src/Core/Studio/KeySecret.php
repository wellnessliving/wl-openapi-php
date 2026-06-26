<?php

namespace WlSdk\Core\Studio;

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
     * @return KeySecretGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(KeySecretGetRequest $request): KeySecretGetResponse
    {
        return new KeySecretGetResponse($this->client->request('/Core/Studio/KeySecret.json', $request->params(), 'GET'));
    }
}
