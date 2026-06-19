<?php
namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Restricts access to API for all sites, which are given in the list.
 */
class OriginDelete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
