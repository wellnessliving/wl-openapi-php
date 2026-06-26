<?php

namespace WlSdk\Wl\Staff\PayRate;

use WlSdk\WlSdkClient;

/**
 * This method is called to process GET query.
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
     * This method is called to process GET query.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Staff/PayRate/List.json', $request->params(), 'GET'));
    }
}
