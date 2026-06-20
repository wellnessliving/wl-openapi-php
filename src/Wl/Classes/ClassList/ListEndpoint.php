<?php

namespace WlSdk\Wl\Classes\ClassList;

use WlSdk\WlSdkClient;

/**
 * Returns list of classes and events in the business.
 */
class ListEndpoint
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of classes and events in the business.
     *
     * Used by import and integration tools to enumerate all classes and events offered by a business.
     * In franchise mode, classes from all franchisee locations are included. Results are sorted by title
     * and start date.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Classes/ClassList/List.json', $request->params(), 'GET'));
    }
}
