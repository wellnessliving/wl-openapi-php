<?php

namespace WlSdk\Wl\Staff\Location;

use WlSdk\WlSdkClient;

/**
 * Gathers a list of business staffs and locations that are available to them.
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
     * Gathers a list of business staffs and locations that are available to them.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Staff/Location/List.json', $request->params(), 'GET'));
    }
}
