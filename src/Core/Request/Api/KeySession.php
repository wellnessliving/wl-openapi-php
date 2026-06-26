<?php

namespace WlSdk\Core\Request\Api;

use WlSdk\WlSdkClient;

/**
 * Gets a session key.
 */
class KeySession
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a session key.
     *
     * @return KeySessionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(KeySessionGetRequest $request): KeySessionGetResponse
    {
        return new KeySessionGetResponse($this->client->request('/Core/Request/Api/KeySession.json', $request->params(), 'GET'));
    }
}
