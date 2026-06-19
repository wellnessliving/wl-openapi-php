<?php
namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Gets list of all sites, where usage of the API is allowed for the current application.
 */
class OriginGet
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
}
