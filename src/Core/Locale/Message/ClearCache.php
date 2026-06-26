<?php

namespace WlSdk\Core\Locale\Message;

use WlSdk\WlSdkClient;

/**
 * Clears all caches where messages can be cached.
 */
class ClearCache
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Clears all caches where messages can be cached.
     *
     * This includes compiled versions of templates.
     *
     * @return ClearCachePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClearCachePostRequest $request): ClearCachePostResponse
    {
        return new ClearCachePostResponse($this->client->request('/Core/Locale/Message/ClearCache.json', $request->params(), 'POST'));
    }
}
