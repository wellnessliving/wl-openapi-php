<?php

namespace WlSdk\Core\Server\ApcClear;

use WlSdk\WlSdkClient;

/**
 * Deletes a key from APC cache.
 */
class ApcClear
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes a key from APC cache.
     *
     * @return ApcClearPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ApcClearPostRequest $request): ApcClearPostResponse
    {
        return new ApcClearPostResponse($this->client->request('/Core/Server/ApcClear/ApcClear.json', $request->params(), 'POST'));
    }
}
