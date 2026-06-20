<?php

namespace WlSdk\Wl\Resource\ResourceList;

use WlSdk\WlSdkClient;

/**
 * Returns assets list in the business.
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
     * Returns assets list in the business.
     *
     * Returns all assets if `$id_category` is not specified or only certain category assets. Includes
     *   main information about assets.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Resource/ResourceList/List.json', $request->params(), 'GET'));
    }
}
