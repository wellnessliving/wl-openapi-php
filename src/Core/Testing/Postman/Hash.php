<?php

namespace WlSdk\Core\Testing\Postman;

use WlSdk\WlSdkClient;

/**
 * Encode original string by algorithm that comes from the request. This method is used only for testing.
 */
class Hash
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Encode original string by algorithm that comes from the request. This method is used only for testing.
     *
     * @return HashPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(HashPostRequest $request): HashPostResponse
    {
        return new HashPostResponse($this->client->request('/Core/Testing/Postman/Hash.json', $request->params(), 'POST'));
    }
}
