<?php
namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Allows access to API for all sites, which are given in the list.
 */
class OriginPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Allows access to API for all sites, which are given in the list.
     *
     * Accepts a list of origin URLs (with optional API domain overrides), validates each URL and domain,
     * inserts or updates the entries in the allowed origins for the current application, then clears the origin
     * cache.
     *
     * @return OriginPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(OriginPutRequest $request): OriginPutResponse
    {
        return new OriginPutResponse($this->client->request('/Core/Request/Api/Application/Origin.json', $request->params(), 'PUT'));
    }
}
