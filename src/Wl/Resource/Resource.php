<?php

namespace WlSdk\Wl\Resource;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Resource/Resource.json
 */
class Resource
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Resource/Resource.json.
     *
     * @return ResourceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResourceGetRequest $request): ResourceGetResponse
    {
        return new ResourceGetResponse($this->client->request('/Wl/Resource/Resource.json', $request->params(), 'GET'));
    }
}
