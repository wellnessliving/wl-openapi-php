<?php

namespace WlSdk\Wl\Purchase\Pool;

use WlSdk\WlSdkClient;

/**
 * Checks if certain item exists in the active purchase pool.
 */
class PoolItem
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if certain item exists in the active purchase pool.
     *
     * @return PoolItemGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PoolItemGetRequest $request): PoolItemGetResponse
    {
        return new PoolItemGetResponse($this->client->request('/Wl/Purchase/Pool/PoolItem.json', $request->params(), 'GET'));
    }
}
