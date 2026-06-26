<?php

namespace WlSdk\Core\Cache\CachePhp;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Cache/CachePhp/Invalidate.json
 */
class Invalidate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Cache/CachePhp/Invalidate.json.
     *
     * @return InvalidateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InvalidateGetRequest $request): InvalidateGetResponse
    {
        return new InvalidateGetResponse($this->client->request('/Core/Cache/CachePhp/Invalidate.json', $request->params(), 'GET'));
    }
}
