<?php

namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Gets list of all sites, where usage of the API is allowed for the current application.
 */
class Origin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of all sites, where usage of the API is allowed for the current application.
     *
     * Returns the list of allowed CORS origins for the current API application, where each key is an
     * origin URL and each value is an optional API domain used to proxy requests from that origin.
     *
     * @return OriginGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(OriginGetRequest $request): OriginGetResponse
    {
        return new OriginGetResponse($this->client->request('/Core/Request/Api/Application/Origin.json', $request->params(), 'GET'));
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

    /**
     * Restricts access to API for all sites, which are given in the list.
     *
     * Accepts a list of origin URLs (with optional API domain overrides), validates each URL, and removes
     * the matching entries from the allowed origins for the current application, then clears the origin cache.
     *
     * @return OriginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(OriginDeleteRequest $request): OriginDeleteResponse
    {
        return new OriginDeleteResponse($this->client->request('/Core/Request/Api/Application/Origin.json', $request->params(), 'DELETE'));
    }
}
