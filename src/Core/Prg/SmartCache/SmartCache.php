<?php

namespace WlSdk\Core\Prg\SmartCache;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Prg/SmartCache/SmartCache.json
 */
class SmartCache
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Prg/SmartCache/SmartCache.json.
     *
     * @return SmartCacheGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SmartCacheGetRequest $request): SmartCacheGetResponse
    {
        return new SmartCacheGetResponse($this->client->request('/Core/Prg/SmartCache/SmartCache.json', $request->params(), 'GET'));
    }
}
