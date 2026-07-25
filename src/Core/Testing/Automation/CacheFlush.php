<?php

namespace WlSdk\Core\Testing\Automation;

use WlSdk\WlSdkClient;

/**
 * Flushes all application caches.
 */
class CacheFlush
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Flushes all application caches.
     *
     * @return CacheFlushGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CacheFlushGetRequest $request): CacheFlushGetResponse
    {
        return new CacheFlushGetResponse($this->client->request('/Core/Testing/Automation/CacheFlush.json', $request->params(), 'GET'));
    }
}
