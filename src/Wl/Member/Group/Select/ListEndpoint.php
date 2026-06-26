<?php

namespace WlSdk\Wl\Member\Group\Select;

use WlSdk\WlSdkClient;

/**
 * Returns member groups list in the business.
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
     * Returns member groups list in the business.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Member/Group/Select/List.json', $request->params(), 'GET'));
    }
}
