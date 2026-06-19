<?php
namespace WlSdk\Core\Request\Api\Application;

use WlSdk\WlSdkClient;

/**
 * Gets list of all sites, where usage of the API is allowed for the current application.
 */
class OriginApi
{
    /**
     * A list of origins.
     * 
     * An associative array where the key is the origin URL of the site where API calls can be made,
     *  and the value is the additional API domain used to make API requests to the WellnessLiving server.
     * `null` if not yet initialized.
     *
     * @var string[]|null
     */
    public ?array $a_list = null;

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
     * @return OriginApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): OriginApiGetResponse
    {
        return new OriginApiGetResponse($this->client->request('/Core/Request/Api/Application/Origin.json', $this->params(), 'GET'));
    }

    /**
     * Allows access to API for all sites, which are given in the list.
     *
     * Accepts a list of origin URLs (with optional API domain overrides), validates each URL and domain,
     * inserts or updates the entries in the allowed origins for the current application, then clears the origin
     * cache.
     *
     * @return OriginApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): OriginApiPutResponse
    {
        return new OriginApiPutResponse($this->client->request('/Core/Request/Api/Application/Origin.json', $this->params(), 'PUT'));
    }

    /**
     * Restricts access to API for all sites, which are given in the list.
     *
     * Accepts a list of origin URLs (with optional API domain overrides), validates each URL, and removes
     * the matching entries from the allowed origins for the current application, then clears the origin cache.
     *
     * @return OriginApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): OriginApiDeleteResponse
    {
        return new OriginApiDeleteResponse($this->client->request('/Core/Request/Api/Application/Origin.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_list' => $this->a_list,
            ],
            static fn($v) => $v !== null
        );
    }
}
